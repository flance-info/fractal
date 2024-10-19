<?php

use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class OurWorks_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'ourworks';
	}

	public function get_title() {
		return __( 'Our Works Fractal Widget', 'fractal' );
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
		include get_stylesheet_directory() . '/elementor-templates/custom-ourworks-template.php';
	}

	protected function _content_template() {
		?>
		<div class="w-full">
			<section class="self-stretch overflow-hidden flex flex-col items-start justify-center text-17xl">
				<div class="self-stretch bg-general-1-secondary flex flex-col items-center justify-center pt-[140px] px-0 pb-[60px] gap-[30px] text-center text-base text-general-1-primary">
					<div class="relative tracking-[0.25em] leading-[22px] uppercase">
						Our Works
					</div>
					<h2 class="relative text-59xl tracking-[-0.04em] leading-[84px] text-general-white">
						Bespoke Interior Design in Dubai
					</h2>

				</div>
				<div class="self-stretch flex flex-row items-center justify-start  text-general-white mq925:flex-col mq925:self-stretch mq925:h-[2000px]">
					<div class="flex-1 relative h-[480px] overflow-hidden bg-[url('/public/case-studies@3x.png')] bg-cover bg-no-repeat bg-[top] mq925:w-full">
						<div class="bg-gradient-hover h-full">
							<div class="absolute h-full w-full top-[780px] right-[0px] bottom-[-780px] left-[0px] bg-general-1-secondary-variant opacity-[0]"></div>
							<div class="absolute w-[calc(100%_-_80px)] right-[40px] bottom-[41px] left-[40px] flex flex-col items-start justify-end gap-5">
								<h3 class="text-17xl  self-stretch relative tracking-[-0.01em] leading-[42px]  fade-out h-100">
									Architect Design
								</h3>
								<div class="w-[303px] relative text-lg leading-[30px] font-body-b6-merriweather-11  fade-out">
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
					<div class="text-general-white flex-1 relative h-[480px] overflow-hidden bg-[url('/public/case-studies1@3x.png')] bg-cover bg-no-repeat bg-[top] mq925:w-full">
						<div class="bg-gradient-hover h-full">
							<div class="absolute h-full w-full top-[780px] right-[0px] bottom-[-780px] left-[0px] bg-general-1-secondary-variant opacity-[0]"></div>
							<div class="absolute w-[calc(100%_-_80px)] right-[40px] bottom-[41px] left-[40px] flex flex-col items-start justify-end gap-5">
								<h3 class="text-17xl  self-stretch relative tracking-[-0.01em] leading-[42px]  fade-out h-100">
									Architectural Residential Designs
								</h3>
								<div class="w-[303px] relative text-lg leading-[30px] font-body-b6-merriweather-11  fade-out">
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
					<div class="flex-1 relative h-[480px] overflow-hidden bg-[url('/public/component-5@3x.png')] bg-cover bg-no-repeat bg-[top] mq925:w-full">
						<div class="bg-gradient-hover h-full">
							<div class="absolute h-full w-full top-[780px] right-[0px] bottom-[-780px] left-[0px] bg-general-1-secondary-variant opacity-[0]"></div>
							<div class="absolute w-[calc(100%_-_80px)] right-[40px] bottom-[41px] left-[40px] flex flex-col items-start justify-end gap-5">
								<h3 class="text-17xl  self-stretch relative tracking-[-0.01em] leading-[42px]  fade-out h-100">
									Building Designs
								</h3>
								<div class="w-[303px] relative text-lg leading-[30px] font-body-b6-merriweather-11  fade-out">
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
					<div class="flex-1 relative h-[480px] overflow-hidden bg-[url('/public/twilight-reflections-on-modern-highrise@3x.png')] bg-cover bg-no-repeat bg-[top] mq925:w-full">
						<div class="bg-gradient-hover h-full">
							<div class="absolute h-full w-full top-[780px] right-[0px] bottom-[-780px] left-[0px] bg-general-1-secondary-variant opacity-[0]"></div>
							<div class="absolute w-[calc(100%_-_80px)] right-[40px] bottom-[41px] left-[40px] flex flex-col items-start justify-end gap-5">
								<h3 class="text-17xl  self-stretch relative tracking-[-0.01em] leading-[42px]  fade-out h-100">
									Towers Design
								</h3>
								<div class="w-[303px] relative text-lg leading-[30px] font-body-b6-merriweather-11  fade-out">
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
				</div>
				<div class="self-stretch flex flex-row items-center justify-start text-general-white mq925:flex-col mq925:self-stretch mq925:h-[2000px]">
					<div class="flex-1 relative h-[480px] overflow-hidden bg-[url('/public/case-studies2@3x.png')] bg-cover bg-no-repeat bg-[top] mq925:w-full">
						<div class="bg-gradient-hover h-full">
							<div class="absolute h-full w-full top-[780px] right-[0px] bottom-[-780px] left-[0px] bg-general-1-secondary-variant opacity-[0]"></div>
							<div class="absolute w-[calc(100%_-_80px)] right-[40px] bottom-[41px] left-[40px] flex flex-col items-start justify-end gap-5">
								<h3 class="text-17xl  self-stretch relative tracking-[-0.01em] leading-[42px]  fade-out h-100">
									Palaces Designs
								</h3>
								<div class="w-[303px] relative text-lg leading-[30px] font-body-b6-merriweather-11  fade-out">
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
					<div class="flex-1 relative h-[480px] overflow-hidden bg-[url('/public/component-51@3x.png')] bg-cover bg-no-repeat bg-[top] mq925:w-full">
						<div class="bg-gradient-hover h-full">
							<div class="absolute h-full w-full top-[780px] right-[0px] bottom-[-780px] left-[0px] bg-general-1-secondary-variant opacity-[0]"></div>
							<div class="absolute w-[calc(100%_-_80px)] right-[40px] bottom-[41px] left-[40px] flex flex-col items-start justify-end gap-5">
								<h3 class="text-17xl  self-stretch relative tracking-[-0.01em] leading-[42px]  fade-out h-100">
									Villas Design
								</h3>
								<div class="w-[303px] relative text-lg leading-[30px] font-body-b6-merriweather-11  fade-out">
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
					<div class="flex-1 relative h-[480px] overflow-hidden bg-[url('/public/photo-46-20240815-1209342@3x.png')] bg-cover bg-no-repeat bg-[top] mq925:w-full">
						<div class="bg-gradient-hover h-full">
							<div class="absolute h-full w-full top-[780px] right-[0px] bottom-[-780px] left-[0px] bg-general-1-secondary-variant opacity-[0]"></div>
							<div class="absolute w-[calc(100%_-_80px)] right-[40px] bottom-[41px] left-[40px] flex flex-col items-start justify-end gap-5">
								<h3 class="text-17xl  self-stretch relative tracking-[-0.01em] leading-[42px]  fade-out h-100">
									Architectural Commercial Designs
								</h3>
								<div class="w-[303px] relative text-lg leading-[30px] font-body-b6-merriweather-11  fade-out">
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
					<div class="flex-1 relative h-[480px] overflow-hidden bg-[url('/public/component-6@3x.png')] bg-cover bg-no-repeat bg-[top] mq925:w-full">
						<div class="bg-gradient-hover h-full">
							<div class="absolute h-full w-full top-[780px] right-[0px] bottom-[-780px] left-[0px] bg-general-1-secondary-variant opacity-[0]"></div>
							<div class="absolute w-[calc(100%_-_80px)] right-[40px] bottom-[41px] left-[40px] flex flex-col items-start justify-end gap-5">
								<h3 class="text-17xl  self-stretch relative tracking-[-0.01em] leading-[42px]  fade-out h-100">
									Malls Design
								</h3>
								<div class="w-[303px] relative text-lg leading-[30px] font-body-b6-merriweather-11  fade-out">
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
				</div>
			</section>
		</div>
		<?php
	}
}
