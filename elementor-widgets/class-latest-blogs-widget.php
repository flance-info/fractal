<?php

use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class LatesBlogs_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'latestblogs';
	}

	public function get_title() {
		return __( 'Home Latest Blogs Fractal Widget', 'fractal' );
	}

	public function get_icon() {
		return 'eicon-banner';
	}

	public function get_categories() {
		return [ 'fractal' ];
	}

	protected function _register_controls() {
		$this->start_controls_section(
				'content_section',
				[
						'label' => __( 'Content', 'fractal' ),
						'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				]
		);
		$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
						'name'     => 'typography',
						'selector' => '{{WRAPPER}}  .elementor-heading-title',
				]
		);
		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		include get_stylesheet_directory() . '/elementor-templates/custom-latestblogs-template.php';
	}

	protected function _content_template() {
		?>
		<div class="w-full">
				<section class="self-stretch relative bg-general-white min-h-[1000px] text-sm flex flex-col items-center mq925:px-[25px]">
		<div class="w-full max-w-[1170px] flex flex-col justify-center ">
			<div class="flex flex-row mt-[148px] mb-[68px] justify-between mq925:flex-col">

				<h2 class=" min-w-[370px] text-base tracking-[0.25em] leading-[22px] uppercase text-general-1-primary">
					From the Blog
				</h2>
				<div class="flex flex-row">
					<div class="flex flex-col gap-[11px]">
						<div class=" text-29xl tracking-[-0.02em] leading-[54px] font-medium text-general-1-secondary inline-block w-[350px]">
							Latest Insights
						</div>
						<div class="flex flex-row mq925:flex-col mq925:gap-[30px]">
							<div class=" text-5xl tracking-[-0.01em] leading-[30px] font-medium text-general-1-secondary-variant inline-block w-[580px] mq925:w-full">
								Stay inspired with our latest interior design trends, expert advice,
								and project spotlights.
							</div>
							<a class="[text-decoration:none] font-medium bg-general-white border-general-1-primary border-[2px]
					border-solid  w-[150px] h-[50px] overflow-hidden
					 text-center text-base text-general-1-secondary justify-center flex mbtn-prm-bord hover:text-white" href="/all-blog-page/">
								<div class=" leading-[22px] font-medium flex items-center justify-center">
									All Posts
								</div>
							</a>
						</div>
					</div>

				</div>


			</div>

			<div class="flex flex-row justify-between mq925:flex-col">
				<div class="  w-[370px] overflow-hidden flex flex-col items-start justify-start gap-[30px] stm-hover-box mq925:mb-[50px] mq925:w-full">
					<div class="self-stretch relative h-60 stm-img">
						<img class="absolute h-full w-full top-[0%] right-[0%] bottom-[0%]
									left-[0%] max-w-full overflow-hidden max-h-full object-cover stm-m-img" alt="" src="/wp-content/themes/fractal/fractal/build/sustainablehousedesignfeaturesbenefitsmore@2x.webp">
						<img class="absolute h-full w-full top-[0%] right-[0%]
									bottom-[0%] left-[0%] max-w-full overflow-hidden
									max-h-full object-cover stm-h-img" alt="" src="/wp-content/themes/fractal/fractal/build/glasses-girl.webp">

						<div class="absolute top-[20px] left-[20px] bg-general-1-primary flex flex-row items-center justify-center py-[3px] px-2 text-white">
							<div class="relative leading-[20px]">August 30, 2024</div>
						</div>
					</div>
					<div class="self-stretch h-[270px] overflow-hidden shrink-0 flex flex-col items-start justify-between text-base text-general-1-secondary-variant">
						<div class="self-stretch flex flex-col items-start justify-start gap-5 text-5xl">
							<div class="self-stretch relative tracking-[-0.01em] leading-[30px] font-medium stm-title">
								Sustainable House Design—Features, Benefits & More
							</div>
							<div class="self-stretch relative text-lg leading-[30px] font-body-b6-merriweather-11 text-elements-neutral">
								Dubai is the reflection of its breathtaking skyline and luxury
								architecture.
							</div>
						</div>

						<div class="flex flex-row items-center justify-start relative gap-4 text-right text-general-1-secondary">


							<a class="stm-gray" href="/sustainable-house-design-features-benefits-more/">
								<div class="notext-color arrow-container">
									<span class="text tracking-[0.25em] leading-[22px]  uppercase z-[1]">Read More</span>
									<div class="circle">
										<img decoding="async" class="stm-mb w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/navigation3.webp">
										<img decoding="async" class="stm-mb1 w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/orange_nav.webp">
									</div>

								</div>
							</a>
						</div>


					</div>
				</div>
				<div class=" top-[344px] left-[775px] w-[370px] h-[540px] overflow-hidden flex flex-col items-start justify-start gap-[30px] stm-hover-box mq925:mb-[50px] mq925:w-full">
					<div class="self-stretch relative h-60 stm-img">
						<img class="absolute h-full w-full top-[0%] right-[0%] bottom-[0%] left-[0%]
									max-w-full overflow-hidden max-h-full object-cover stm-m-img" alt="" src="/wp-content/themes/fractal/fractal/build/gardendesignindubaitransformyouroutdoorspace@2x.webp">
						<img class="absolute h-full w-full top-[0%] right-[0%]
									bottom-[0%] left-[0%] max-w-full overflow-hidden
									max-h-full object-cover stm-h-img" alt="" src="/wp-content/themes/fractal/fractal/build/glasses-girl.webp">
						<div class="absolute top-[20px] left-[20px] bg-general-1-primary flex flex-row items-center justify-center py-[3px] px-2 text-white">
							<div class="relative leading-[20px]">August 4, 2024</div>
						</div>
					</div>
					<div class="self-stretch flex-1 overflow-hidden flex flex-col items-start justify-between text-base text-general-1-secondary-variant">
						<div class="self-stretch flex flex-col items-start justify-start gap-5 text-5xl">
							<div class="self-stretch relative tracking-[-0.01em] leading-[30px] font-medium stm-title">
								Garden Design in Dubai—Transform Your Outdoor Space
							</div>
							<div class="self-stretch relative text-lg leading-[30px] font-body-b6-merriweather-11 text-elements-neutral">
								When we hear about Dubai, luxury and innovative infrastructure
								come to our mind.
							</div>
						</div>

						<div class="flex flex-row items-center justify-start relative gap-4 text-right text-general-1-secondary">
							<a class="stm-gray" href="/garden-design-in-dubai-transform-your-outdoor-space/">
								<div class="notext-color arrow-container">
									<span class="text tracking-[0.25em] leading-[22px]  uppercase z-[1]">Read More</span>
									<div class="circle">
										<img decoding="async" class="stm-mb w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/navigation3.webp">
										<img decoding="async" class="stm-mb1 w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/orange_nav.webp">
									</div>

								</div>
							</a>

						</div>


					</div>
				</div>
				<div class="top-[344px] left-[1175px] w-[370px] h-[540px] overflow-hidden flex flex-col items-start justify-start gap-[30px] stm-hover-box mq925:mb-[50px] mq925:w-full">
					<div class="self-stretch relative h-60 stm-img">
						<img class="absolute h-full w-full top-[0%] right-[0%]
									bottom-[0%] left-[0%] max-w-full overflow-hidden
									max-h-full object-cover stm-m-img" alt="" src="/wp-content/themes/fractal/fractal/build/fotolia-6014662-subscription-monthly-m-1@2x.webp">
						<img class="absolute h-full w-full top-[0%] right-[0%]
									bottom-[0%] left-[0%] max-w-full overflow-hidden
									max-h-full object-cover stm-h-img" alt="" src="/wp-content/themes/fractal/fractal/build/glasses-girl.webp">
						<div class="absolute top-[20px] left-[20px] bg-general-1-primary flex flex-row items-center justify-center py-[3px] px-2 text-white">
							<div class="relative leading-[20px]">July 18, 2024</div>
						</div>
					</div>
					<div class="self-stretch flex-1 overflow-hidden flex flex-col items-start justify-between text-base text-general-1-secondary-variant mq600:overflow-unset">
						<div class="self-stretch flex flex-col items-start justify-start gap-5 text-5xl">
							<div class="self-stretch relative tracking-[-0.01em] leading-[30px] font-medium stm-title">
								Hospitality Interior Design in Dubai
							</div>
							<div class="self-stretch relative text-lg leading-[30px] font-body-b6-merriweather-11 text-elements-neutral">
								In the year 2024, Dubai has observed a rise in tourists
								exceeding the previous percentage of 16.73 million in 2023.
							</div>
						</div>

						<div class="flex flex-row items-center justify-start relative gap-4 text-right text-general-1-secondary">


							<a class="stm-gray" href="/hospitality-interior-design-in-dubai/">
								<div class="notext-color arrow-container">
									<span class="text tracking-[0.25em] leading-[22px]  uppercase z-[1]">Read More</span>
									<div class="circle">
										<img decoding="async" class="stm-mb w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/navigation3.webp">
										<img decoding="async" class="stm-mb1 w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/orange_nav.webp">
									</div>

								</div>
							</a>


						</div>


					</div>
				</div>
			</div>
		</div>
	</section>
		</div>
		<?php
	}
}
