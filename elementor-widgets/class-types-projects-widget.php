<?php

use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class TypesProjects_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'ourtypesprojects';
	}

	public function get_title() {
		return __( 'Home Types Design Projects Fractal Widget', 'fractal' );
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
		include get_stylesheet_directory() . '/elementor-templates/custom-typesprojects-template.php';
	}

	protected function _content_template() {
		?>
		<div class="w-full">
			<section class="self-stretch overflow-hidden flex flex-col items-center justify-center
		relative bg-[url('/public/slide1.png')] bg-cover bg-no-repeat bg-[top] text-23xl
 text-general-white">
				<h2 class="max-w-[1170px] w-full text-base tracking-[0.25em] leading-[22px]
	 uppercase inline-block z-[2] mt-[100px] mb-[-100px] h-[0px]  mq925:pl-[50px] mq925:mt-[50px]">
					Types of Interior Design Projects
				</h2>
				<div class="w-full self-stretch flex flex-row mq925:flex-col">
					<div class="flex-1 relative min-h-[780px] overflow-hidden bg-gradient-hover child_el mq925:img-slide1 " data-bg="url('/wp-content/themes/fractal/fractal/build/slide1.png')">
						<div class="h-full w-[calc(100%_-_0.3px)] top-[0px] right-[0.3px] bottom-[0px] left-[0px] "></div>
						<div class="absolute w-[calc(100%_-_80.3px)] right-[40.3px] bottom-[41px] left-[40px] flex flex-col items-start justify-end gap-5">
							<h3 class="text-23xl  self-stretch relative tracking-[-0.02em] leading-[48px]
						 font-medium fade-out h-100 mq925:text-11xl mq925:leading-[34px] mq925:m-0">
								Modern Villa Design and Renovation
							</h3>
							<div class="self-stretch relative text-lg leading-[30px]
						font-body-b6-merriweather-11 fade-out mq925:text-sm mq925:leading-[24px] ">
								Transform your villa into a modern masterpiece with Fractal. We
								specialize in creating stunning modern villa designs tailored to
								your lifestyle. Our expert team delivers exceptional renovation
								services to elevate your Dubai home to new heights of luxury and
								comfort.
							</div>
							<div onclick="openModal()" class="flex flex-row items-center justify-start relative gap-4 text-right text-base">


								<div class="arrow-container">
									<span class="text tracking-[0.25em] leading-[22px]  uppercase z-[1]">FULL CASE STUDY</span>
									<div class="circle">
										<img class="stm-mb w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/navigation2.webp">
										<img class="stm-mb1 w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/moved-arrow.webp">
									</div>

								</div>
							</div>


						</div>

					</div>
					<div class="self-stretch w-px relative bg-general-white opacity-[0.25]"></div>
					<div class="flex-1 relative min-h-[780px] overflow-hidden bg-gradient-hover child_el mq925:img-slide2 " data-bg="url('/wp-content/themes/fractal/fractal/build/slide2.png')">
						<div class=" h-full w-[calc(100%_-_0.3px)] top-[780px] right-[0.3px] bottom-[-780px] left-[0px] bg-general-1-secondary-variant opacity-[0]"></div>
						<div class="absolute w-[calc(100%_-_80.3px)] right-[40.3px] bottom-[41px] left-[40px] flex flex-col items-start justify-end gap-5">
							<h3 class="text-23xl  self-stretch relative tracking-[-0.02em] leading-[48px] font-medium fade-out h-100 mq925:text-11xl mq925:leading-[34px] mq925:m-0">
								Residential Interior Design and Apartment Renovation
							</h3>
							<div class="w-[303px] relative text-lg leading-[30px] font-body-b6-merriweather-11 fade-out mq925:text-sm mq925:leading-[24px] ">
								We build machines that set the industry standard for precision
								and durability.
							</div>
							<div onclick="openModal()" class="flex flex-row items-center justify-start relative gap-4 text-right text-base">


								<div class="arrow-container">
									<span class="text tracking-[0.25em] leading-[22px]  uppercase z-[1]">FULL CASE STUDY</span>
									<div class="circle">
										<img class="stm-mb w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/navigation2.webp">
										<img class="stm-mb1 w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/moved-arrow.webp">
									</div>

								</div>
							</div>


						</div>
					</div>
					<div class="self-stretch w-px relative bg-general-white opacity-[0.25]"></div>
					<div class="flex-1 relative min-h-[780px] overflow-hidden bg-gradient-hover child_el mq925:img-slide3 " data-bg="url('/wp-content/themes/fractal/fractal/build/slide3.png')">
						<div class=" h-full w-[calc(100%_-_0.3px)] top-[780px] right-[0.3px] bottom-[-780px] left-[0px] bg-general-1-secondary-variant opacity-[0]"></div>
						<div class="absolute w-[calc(100%_-_80.3px)] right-[40.3px] bottom-[41px] left-[40px] flex flex-col items-start justify-end gap-5">
							<h3 class="text-23xl  self-stretch relative tracking-[-0.02em] leading-[48px] font-medium fade-out h-100 mq925:text-11xl mq925:leading-[34px] mq925:m-0">
								Hotel Interior Design and Hospitality
							</h3>
							<div class="w-[303px] relative text-lg leading-[30px] font-body-b6-merriweather-11 fade-out mq925:text-sm mq925:leading-[24px] ">
								We build machines that set the industry standard for precision
								and durability.
							</div>
							<div onclick="openModal()" class="flex flex-row items-center justify-start relative gap-4 text-right text-base">


								<div class="arrow-container">
									<span class="text tracking-[0.25em] leading-[22px]  uppercase z-[1]">FULL CASE STUDY</span>
									<div class="circle">
										<img class="stm-mb w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/navigation2.webp">
										<img class="stm-mb1 w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/moved-arrow.webp">
									</div>

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
