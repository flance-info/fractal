/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		"./*.{html,js,php}",
		//	"./src/**/*.{html,js}", // Assuming your source files are in a `src` directory
		"./!(build|dist|.*)/**/*.{html,js}",
		"!./node_modules",       // Exclude `node_modules`
		"!./build",              // Exclude `build`
		"!./dist",               // Exclude `dist`
		"!./.*"                  // Exclude hidden directories
	],

	theme: {
		extend: {
			boxShadow: {
				'custom': '0px -1px 0px rgba(255, 255, 255, 0.5) inset',
			},
			colors: {
				"general-white": "#fff",
				"general-1-secondary": "#000",
				gray: {
					"100": "rgba(255, 255, 255, 0.25)",
					"200": "rgba(255, 255, 255, 0.3)",
					"300": "rgba(255, 255, 255, 0.6)",
					"400": "rgba(255, 255, 255, 0.5)",
				},
				"general-1-primary": "#a6876a",
				"general-1-primary-variant": "#92643a",
				"general-1-secondary-variant": "#1c1c1d",
				"elements-neutral": "#878995",
				"elements-neutral-4": "#f2f7f9",
				"general-9-secondary": "#0c121a",
				"label-colors-04": "#66c109",
				slategray: "rgba(89, 115, 147, 0.25)",
				"elements-neutral-1": "#597393",
				"general-9-secondary-variant": "#686868",
				lightblue: "#bfd4e4",
				yellowgreen: "rgba(187, 227, 101, 0.3)",
				lightcoral: "rgba(246, 149, 153, 0.3)",
				"label-colors-06": "#f64662",
				"stroke-01": "#dae4ed",
				"elements-neutral-2": "#bfd4e4",
				"label-colors-01": "#32c5ff",
				"stroke-09": "rgba(9, 152, 255, 0.7)",
				"stroke-05": "rgba(228, 46, 75, 0.7)",
				"stroke-06": "rgba(78, 154, 0, 0.7)",
			},
			spacing: {},
			fontFamily: {
				"primary-paragraph-paragraph-5": "'Eudoxus Sans'",
				"body-b4-merriweather-13": "Merriweather",
				"button-space-grotesk": "'Space Grotesk'",
				"headlines-h4-dm-sans-30": "'DM Sans'",
				"body-b6-merriweather-11": "Merriweather",
				"text-04": "Inter",
			},

			borderRadius: {
				xl: "20px",
				"11xl": "30px",
			},
			backgroundImage: {
				'custom-gradient': 'linear-gradient(180deg, rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.5))',
				'custom-gradient-hover': 'linear-gradient(180deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.75))',
			},
			backgroundPosition: {
				'bottom-left': '0% 100%',
				'top-right': '100% 0%',
			},
			transitionProperty: {
				'background-position': 'background-position',
			}
		},
		fontSize: {
			xs: "12px",
			smi: "13px",
			base: "16px",
			sm: "14px",
			"5xl": "24px",
			lgi: "19px",
			xl: "20px",
			"11xl": "30px",
			lg: "18px",
			"29xl": "48px",
			"10xl": "29px",
			"19xl": "38px",
			"17xl": "36px",
			"3xl": "22px",
			"23xl": "42px",
			"6xl": "25px",
			"15xl": "34px",
			"41xl": "60px",
			inherit: "inherit",
			"2xs": "11px",
			"3xs": "10px",
			"59xl": "78px",
			"77xl": "96px",
		},
		screens: {
			mq1875: {
				raw: "screen and (max-width: 1875px)",
			},
			mq1400: {
				raw: "screen and (max-width: 1400px)",
			},
			mq1300: {
				raw: "screen and (max-width: 1300px)",
			},
			mq1125: {
				raw: "screen and (max-width: 1125px)",
			},
			mq925: {
				raw: "screen and (max-width: 925px)",
			},
			mq800: {
				raw: "screen and (max-width: 800px)",
			},
			mq450: {
				raw: "screen and (max-width: 450px)",
			},
			mq600: {
				raw: "screen and (max-width: 600px)",
			},
		},
	},
	corePlugins: {
		preflight: false,
	},
};
