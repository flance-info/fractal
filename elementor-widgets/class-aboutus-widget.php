<?php

use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Aboutus_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'aboutus';
	}

	public function get_title() {
		return __( 'About Us Fractal Widget', 'fractal' );
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
		include get_stylesheet_directory() . '/elementor-templates/custom-aboutus-template.php';
	}

	protected function _content_template() {
		?>
		<div class="w-full">

			<section class="self-stretch bg-general-1-secondary min-h-[774px] flex flex-row mq925:flex-col items-center text-general-1-secondary w-full
			justify-center gap-20 mq925:p-0">


				<div class="absolute  transform translate-x-[50%] ml-[-1950px] pt-[5px] mq925:relative mq925:m-0 mq925:p-0 mq925:transform-unset">
					<img class="w-[575px] h-[774px]  " alt="" src="/wp-content/themes/fractal/fractal/build/modern-rustic-serenity-bathroom.webp">
				</div>


				<div class="w-full max-w-[975px] ml-[175px] h-full mq925:ml-0 w-calc-100vw-minus-50px mq925:mb-[100px]">
					<div class="flex-1 flex flex-col items-start justify-start gap-[30px] pl-[75px] pt-[95px]
		mq925:pl-0 mq925:pt-[40px] ">
						<div class="self-stretch relative tracking-[0.25em] leading-[22px] uppercase text-general-1-primary">
							About Us
						</div>
						<h2 class="self-stretch relative text-59xl  tracking-[-0.04em] leading-[84px] text-general-white mq925:text-41xl">
							Your Vision, Our Expertise
						</h2>
						<div class="self-stretch relative text-5xl tracking-[-0.01em] leading-[30px] font-medium text-general-white">
							Fractal is a Dubai-based leading interior design company dedicated
							to creating exceptional spaces (home, villa, hotel fit out works,
							offices, commercial spaces, etc) that reflect your unique taste.
						</div>
						<div class="self-stretch relative leading-[26px] font-body-b6-merriweather-11 text-elements-neutral">
							<p class="m-0">
								Our design philosophy is deeply rooted in functionality
								and elegance. We take the time to understand your lifestyle
								and needs. From there, we create interiors that are not only
								visually stunning but also perfectly suited to your
								day-to-day life.
							</p>
							<p class="m-0">&nbsp;</p>
							<p class="m-0">
								What makes Fractal stand out is our commitment to personalized
								service. We know every client is different, so we approach each
								project with fresh eyes. Whether you’re after a minimalist
								renovation, a fit-out with a touch of luxury, or a cozy retreat,
								we have the expertise to create a space (including furniture
								and other elements) that truly speaks to you.
							</p>
						</div>
						<div onclick="openModal()" class="flex flex-row items-center justify-start relative gap-4 text-right text-base">


							<div class="arrow-container">
								<span class="text tracking-[0.25em] leading-[22px]  uppercase z-[1]">Learn more</span>
								<div class="circle">
									<img class="stm-mb w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/navigation2.webp">
									<img class="stm-mb1 w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/moved-arrow.webp">
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
