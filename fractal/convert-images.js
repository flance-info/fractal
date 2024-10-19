const sharp = require('sharp');
const fs = require('fs');
const path = require('path');
const chokidar = require('chokidar');

// Supported image extensions
const supportedExtensions = ['.png', '.jpg', '.jpeg', '.svg'];

// Directory paths
const srcDir = 'src'; // Directory where your source HTML files are located
const outputImageDir = 'src/images'; // Directory where converted images will be saved
const htmlDir = 'src'; // Directory where your built HTML files are located

// Ensure output image directory exists
if (!fs.existsSync(outputImageDir)) {
	fs.mkdirSync(outputImageDir, {recursive: true});
}

// Function to convert image to WebP
function convertImage(imagePath, outputFilePath) {
	// Skip files larger than a certain size (e.g., 2 MB)
	const stats = fs.statSync(imagePath);
	if (stats.size > 100 * 1024 * 1024) {
		console.log(`Skipping large file: ${imagePath}`);
		return false;
	}

	// Process only valid images
	sharp(imagePath)
		.webp({quality: 75})
		.toFile(outputFilePath)
		.then(() => {
		//	console.log(`Converted ${imagePath} to ${outputFilePath}`);
			// Remove the original image file
			//fs.unlinkSync(imagePath);
		//	console.log(`Removed original image: ${imagePath}`);
		})
		.catch(err => {
			if (err.message.includes('corrupt header') || err.message.includes('Resource limit exceeded')) {
				console.log(`Skipping problematic file: ${imagePath}`);
			} else {
				console.error(`Error processing file ${imagePath}:`, err);
			}

			return false
		});
}

// Function to update HTML image links to WebP and process images
function processHtmlFiles() {
	// Read all HTML files in the src directory
	fs.readdirSync(srcDir).forEach(file => {
		if (path.extname(file) === '.html') {
			const htmlFilePath = path.join(srcDir, file);
			let htmlContent = fs.readFileSync(htmlFilePath, 'utf-8');

			// Regular expression to find image sources in <img>, <source>, and <image> tags
			const imgSrcRegex = /(<(?:img|source|image)[^>]+(?:src|href)=["'])([^"']+\.(png|jpg|jpeg|svg))(["'][^>]*>)/gi;

			// Collect all image paths
			const imagePaths = [];
			htmlContent = htmlContent.replace(imgSrcRegex, (match, p1, p2, p3, p4) => {
				let imagePath;
				if (p2.includes('public')) {
					imagePath = path.resolve(srcDir, p2.replace(/^\//, '')); // If 'public' is already part of the path, resolve as is
				} else {
					imagePath = path.resolve(srcDir, 'public', p2.replace(/^\//, '')); // Otherwise, prepend 'public'
				}

				// Check if the image file exists
				if (fs.existsSync(imagePath)) {
					imagePaths.push(imagePath);

					// Extract the image filename without extension
					const filename = path.basename(p2, path.extname(p2));
					// Construct the new image path
					const newImagePath = `images/${filename}.webp`;

					// Update the image link in HTML
					return `${p1}${newImagePath}${p4}`;
				} else {
					console.log(`Image file not found: ${imagePath}`);
					return match; // Return the original match if the file doesn't exist
				}
			});

			// Write the updated HTML content to the dist directory
			const outputHtmlPath = path.join(htmlDir, file);
			fs.writeFileSync(outputHtmlPath, htmlContent, 'utf-8');
			console.log(`Processed HTML file: ${outputHtmlPath}`);

			// Process the collected images
			imagePaths.forEach(imagePath => {
				const filename = path.basename(imagePath, path.extname(imagePath));
				const outputFilePath = path.join(outputImageDir, `${filename}.webp`);
				convertImage(imagePath, outputFilePath);
			});
		}
	});
}

function convertImageFile(imagePath, outputFilePath) {
  return new Promise((resolve, reject) => {
    // Skip files larger than a certain size (e.g., 100 MB)
    const stats = fs.statSync(imagePath);
    if (stats.size > 100 * 1024 * 1024) {
      console.log(`Skipping large file: ${imagePath}`);
      return resolve(false); // Resolve the promise with 'false'
    }

    // Process only valid images
    sharp(imagePath)
      .webp({ quality: 75 })
      .toFile(outputFilePath)
      .then(() => {
        console.log(`Converted ${imagePath} to ${outputFilePath}`);
        resolve(true); // Resolve with 'true' on success
      })
      .catch(err => {
        if (err.message.includes('corrupt header') || err.message.includes('Resource limit exceeded')) {
          console.log(`Skipping problematic file: ${imagePath}`);
        } else {
          console.error(`Error processing file ${imagePath}:`, err);
        }
        resolve(false); // Resolve with 'false' on failure
      });
  });
}

// Initial processing
function runProcessing() {
	processHtmlFiles();
}

runProcessing();

// Watch for changes if '--watch' argument is provided
if (process.argv.includes('--watch')) {
	// Watch src directory for HTML changes
	chokidar.watch(`${srcDir}/**/*.html`).on('change', (filePath) => {
		console.log(`HTML file changed: ${filePath}`);
		processHtmlFiles();
	});
}
