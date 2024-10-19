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
				'selector' => '{{WRAPPER}} .paragraph_one',
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
				'selector' => '{{WRAPPER}} .paragraph_one',
			]
		);
		$this->add_control(
			'paragraph_one_color',
			[
				'label'     => __( 'Paragraph Color', 'fractal' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .paragraph_one' => 'color: {{VALUE}};',
				],
			]
		);
		// Editor field for the second paragraph (Our design philosophy...)
		$this->add_control(
			'paragraph_one',
			[
				'label'       => __( 'Paragraph One', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::WYSIWYG,
				'default'     => __( 'Fractal is a Dubai-based leading interior design company dedicated
					to creating exceptional spaces (home, villa, hotel fit out works,
					offices, commercial spaces, etc) that reflect your unique taste.', 'fractal' ),
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
				'selector' => '{{WRAPPER}} .paragraph_two',
			]
		);
		$this->add_control(
			'paragraph_two_color',
			[
				'label'     => __( 'Paragraph Color', 'fractal' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .paragraph_two' => 'color: {{VALUE}};',
				],
			]
		);
		// Editor field for the third paragraph (What makes Fractal stand out...)
		$this->add_control(
			'paragraph_two',
			[
				'label'       => __( 'Paragraph Two', 'fractal' ),
				'type'        => \Elementor\Controls_Manager::WYSIWYG,
				'default'     => __( '<p class="m-0">
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
				', 'fractal' ),
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
		$settings = $this->get_settings_for_display();
		$image_url = ! empty( $settings['widget_image']['url'] ) ? $settings['widget_image']['url'] : '';
		// Get heading and paragraph values
		$heading_one = $settings['heading_one'];
		$heading_two          = $settings['heading_two'];
		$heading_two_html_tag = $settings['heading_two_html_tag'];
		$paragraph_one        = $settings['paragraph_one'];
		$paragraph_two        = $settings['paragraph_two'];
		include get_stylesheet_directory() . '/elementor-templates/custom-aboutus-template.php';
	}

	protected function _content_template() {
		?>

		<?php
	}
}
