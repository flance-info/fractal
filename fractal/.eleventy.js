module.exports = function(eleventyConfig) {
  // Tell Eleventy to look for components in the "src/components" folder
  eleventyConfig.addPassthroughCopy("src"); // (if you're using CSS)

  return {
    dir: {
      input: "src",
      includes: "components", // Look for components in "src/components"
      output: "_site"
    }
  };
};
