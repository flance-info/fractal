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
		// Content Section
		$this->start_controls_section(
				'content_section_heading',
				[
						'label' => __( 'Content Label and Heading', 'fractal' ),
						'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				]
		);
		// Input field for the first heading (About Us)
		$this->add_control(
				'heading_one',
				[
						'label'       => __( 'Widget Label', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( 'About Us', 'fractal' ),
						'label_block' => true,
				]
		);
		// Color control for Heading One
		$this->add_control(
				'heading_one_color',
				[
						'label'     => __( 'Widget Label Color', 'fractal' ),
						'type'      => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
								'{{WRAPPER}} .heading-one' => 'color: {{VALUE}};',
						],
				]
		);
		// Typography control for Heading One
		$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
						'name'     => 'heading_one_typography',
						'label'    => __( 'Widget Label Typography', 'fractal' ),
						'selector' => '{{WRAPPER}} .heading-one',
				]
		);
		// Input field for the second heading (Your Vision, Our Expertise)
		$this->add_control(
				'heading_two',
				[
						'label'       => __( 'Heading', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( 'Your Vision, Our Expertise', 'fractal' ),
						'label_block' => true,
				]
		);
		// HTML Tag selection for Heading Two
		$this->add_control(
				'heading_two_html_tag',
				[
						'label'   => __( 'HTML Tag for Heading', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::SELECT,
						'options' => [
								'h1' => __( 'H1', 'fractal' ),
								'h2' => __( 'H2', 'fractal' ),
								'h3' => __( 'H3', 'fractal' ),
								'h4' => __( 'H4', 'fractal' ),
								'h5' => __( 'H5', 'fractal' ),
								'h6' => __( 'H6', 'fractal' ),
						],
						'default' => 'h2',
				]
		);
		// Color control for Heading Two
		$this->add_control(
				'heading_two_color',
				[
						'label'     => __( 'Heading Color', 'fractal' ),
						'type'      => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
								'{{WRAPPER}} .heading-two' => 'color: {{VALUE}};',
						],
				]
		);
		// Typography control for Heading Two
		$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
						'name'     => 'heading_two_typography',
						'label'    => __( 'Heading Typography', 'fractal' ),
						'selector' => '{{WRAPPER}} .heading-two',
				]
		);
		$this->end_controls_section();
		$this->start_controls_section(
				'content_section_description',
				[
						'label' => __( 'Content Text', 'fractal' ),
						'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				]
		);
		$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
						'name'     => 'paragraph_one_typography',
						'label'    => __( 'Paragraph Typography', 'fractal' ),
						'selector' => '{{WRAPPER}} .heading-two',
				]
		);
		$this->add_control(
				'paragraph_one_color',
				[
						'label'     => __( 'Paragraph Color', 'fractal' ),
						'type'      => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
								'{{WRAPPER}} .heading-two' => 'color: {{VALUE}};',
						],
				]
		);
		// Editor field for the second paragraph (Our design philosophy...)
		$this->add_control(
				'paragraph_one',
				[
						'label'       => __( 'Paragraph One', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::WYSIWYG,
						'default'     => __( '<div class="self-stretch relative text-5xl tracking-[-0.01em] leading-[30px] font-medium text-general-white">
					Fractal is a Dubai-based leading interior design company dedicated
					to creating exceptional spaces (home, villa, hotel fit out works,
					offices, commercial spaces, etc) that reflect your unique taste.
				</div>', 'fractal' ),
						'label_block' => true,
				]
		);
		$this->add_control(
				'paragraph_one_separator',
				[
						'type' => \Elementor\Controls_Manager::DIVIDER,
				]
		);
		$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
						'name'     => 'paragraph_two_typography',
						'label'    => __( 'Paragraph Typography', 'fractal' ),
						'selector' => '{{WRAPPER}} .heading-two',
				]
		);
		$this->add_control(
				'paragraph_two_color',
				[
						'label'     => __( 'Paragraph Color', 'fractal' ),
						'type'      => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
								'{{WRAPPER}} .heading-two' => 'color: {{VALUE}};',
						],
				]
		);
		// Editor field for the third paragraph (What makes Fractal stand out...)
		$this->add_control(
				'paragraph_two',
				[
						'label'       => __( 'Paragraph Two', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::WYSIWYG,
						'default'     => __( '<div class="self-stretch relative leading-[26px] font-body-b6-merriweather-11 text-elements-neutral">
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
				</div>', 'fractal' ),
						'label_block' => true,
				]
		);
		$this->end_controls_section();
		$this->start_controls_section(
				'content_section_image',
				[
						'label' => __( 'Widget Image', 'fractal' ),
						'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				]
		);
// Add image control with custom default image
		$this->add_control(
				'widget_image',
				[
						'label'   => __( 'Choose Image', 'fractal' ),
						'type'    => \Elementor\Controls_Manager::MEDIA,
						'default' => [
								'url' => get_template_directory_uri() . '/fractal/build/modern-rustic-serenity-bathroom.webp',
						],
				]
		);
		$this->end_controls_section();

	}

	protected function render() {
		$settings  = $this->get_settings_for_display();
		$image_url = ! empty( $settings['widget_image']['url'] ) ? $settings['widget_image']['url'] : '';
		// Get heading and paragraph values
		$heading_one = $settings['heading_one'];
		// Check if heading_one_color is set and assign it, otherwise use a default value
		$heading_one_color = ! empty( $settings['heading_one_color'] ) ? $settings['heading_one_color'] : '';
// Check if heading_two_color is set and assign it, otherwise use a default value
		$heading_two_color = ! empty( $settings['heading_two_color'] ) ? $settings['heading_two_color'] : '';
		$heading_two          = $settings['heading_two'];
		$heading_two_html_tag = $settings['heading_two_html_tag'];
		$paragraph_one = $settings['paragraph_one'];
		$paragraph_two = $settings['paragraph_two'];
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
