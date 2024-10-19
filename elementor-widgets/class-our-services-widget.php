<?php

use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class OurServices_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'ourservices';
	}

	public function get_title() {
		return __( 'Our Services Fractal Widget', 'fractal' );
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
						'label' => __( 'Content Label and Heading', 'fractal' ),
						'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				]
		);
		$this->add_control(
				'label_one',
				[
						'label'       => __( 'Widget Label', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( 'Our Services', 'fractal' ),
						'label_block' => true,
						'dynamic'     => [
								'active' => true
						],
				]
		);
		// Widget Label Color
		$this->add_control(
				'heading_one_color',
				[
						'label'     => __( 'Widget Label Color', 'fractal' ),
						'type'      => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
								'{{WRAPPER}} .label_one' => 'color: {{VALUE}};',
						],
						'dynamic'   => [
								'active' => true
						],
				]
		);
		// Widget Label Typography
		$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
						'name'     => 'heading_one_typography',
						'label'    => __( 'Widget Label Typography', 'fractal' ),
						'selector' => '{{WRAPPER}} .label_one',
				]
		);
		// Heading
		$this->add_control(
				'heading',
				[
						'label'       => __( 'Heading', 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( 'Our Design Services in Dubai', 'fractal' ),
						'label_block' => true,
						'dynamic'     => [
								'active' => true
						],
				]
		);
		// HTML Tag for Heading Two
		$this->add_control(
				'heading_html_tag',
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
		// Heading Two Color
		$this->add_control(
				'heading_color',
				[
						'label'     => __( 'Heading Color', 'fractal' ),
						'type'      => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
								'{{WRAPPER}} .heading' => 'color: {{VALUE}};',
						],
						'dynamic'   => [
								'active' => true
						],
				]
		);
		$this->end_controls_section();
		$default_values = [
				1 => [
						'title'       => 'Comprehensive Interior Design',
						'description' => 'Fractal offers a full suite of interior design services to transform your space.',
						'bg_image'    => get_template_directory_uri() . '/fractal/build/sample-bg1.webp',
				],
				2 => [
						'title'       => 'Expert Renovation Services',
						'description' => 'Fractal excels in turning your home into functional living areas.',
						'bg_image'    => get_template_directory_uri() . '/fractal/build/sample-bg2.webp',
				],
				3 => [
						'title'       => 'Exquisite Furniture Services',
						'description' => 'Fractal redefines luxury living and workspaces with custom furniture.',
						'bg_image'    => get_template_directory_uri() . '/fractal/build/sample-bg3.webp',
				],
				4 => [
						'title'       => 'Construction Supervision',
						'description' => 'We ensure smooth execution of projects with high standards of quality.',
						'bg_image'    => get_template_directory_uri() . '/fractal/build/sample-bg4.webp',
				],
		];
		for ( $i = 1; $i <= 4; $i ++ ) {
			$this->register_service_controls( $i, $default_values[ $i ] );
		}
	}

	protected function register_service_controls( $service_number, $defaults ) {
		$this->start_controls_section(
				"content_section_{$service_number}",
				[
						'label' => __( "Service {$service_number}", 'fractal' ),
						'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				]
		);
		// Service Title Control
		$this->add_control(
				"service_{$service_number}_title",
				[
						'label'       => __( "Service {$service_number} Title", 'fractal' ),
						'type'        => \Elementor\Controls_Manager::TEXT,
						'default'     => __( $defaults['title'], 'fractal' ),
						'label_block' => true,
				]
		);
		// Typography Group Control for Title
		$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
						'name'     => "service_{$service_number}_title_typography",
						'label'    => __( "Service {$service_number} Title Typography", 'fractal' ),
						'selector' => "{{WRAPPER}} .service-{$service_number}-title",
				]
		);
		// Color Control for Title
		$this->add_control(
				"service_{$service_number}_title_color",
				[
						'label'     => __( "Service {$service_number} Title Color", 'fractal' ),
						'type'      => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
								"{{WRAPPER}} .service-{$service_number}-title" => 'color: {{VALUE}};',
						],
				]
		);
		$this->add_control(
				"service_{$service_number}_title_tag",
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
						'default' => 'h3',
				]
		);
		// Service Description Control
		$this->add_control(
				"service_{$service_number}_description",
				[
						'label'       => __( "Service {$service_number} Description", 'fractal' ),
						'type'        => \Elementor\Controls_Manager::WYSIWYG,
						'default'     => __( $defaults['description'], 'fractal' ),
						'label_block' => true,
				]
		);
		// Typography Group Control for Description
		$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
						'name'     => "service_{$service_number}_description_typography",
						'label'    => __( "Service {$service_number} Description Typography", 'fractal' ),
						'selector' => "{{WRAPPER}} .service-{$service_number}-description",
				]
		);
		// Color Control for Description
		$this->add_control(
				"service_{$service_number}_description_color",
				[
						'label'     => __( "Service {$service_number} Description Color", 'fractal' ),
						'type'      => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
								"{{WRAPPER}} .service-{$service_number}-description" => 'color: {{VALUE}};',
						],
				]
		);
		// Background Image Control
		$this->add_control(
				"service_{$service_number}_bg_image",
				[
						'label'   => __( "Service {$service_number} Background Image", 'fractal' ),
						'type'    => \Elementor\Controls_Manager::MEDIA,
						'default' => [
								'url' => $defaults['bg_image'],
						],
				]
		);
		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		// Service 1 Data
		$service_1_title       = $settings['service_1_title'];
		$service_1_description = $settings['service_1_description'];
		$service_1_bg_image    = ! empty( $settings['service_1_bg_image']['url'] ) ? esc_url( $settings['service_1_bg_image']['url'] ) : '';
		// Service 2 Data
		$service_2_title       = $settings['service_2_title'];
		$service_2_description = $settings['service_2_description'];
		$service_2_bg_image    = ! empty( $settings['service_2_bg_image']['url'] ) ? esc_url( $settings['service_2_bg_image']['url'] ) : '';
		// Service 3 Data
		$service_3_title       = $settings['service_3_title'];
		$service_3_description = $settings['service_3_description'];
		$service_3_bg_image    = ! empty( $settings['service_3_bg_image']['url'] ) ? esc_url( $settings['service_3_bg_image']['url'] ) : '';
		// Add inline editing attributes
		$this->add_inline_editing_attributes( 'service_1_title', 'none' );
		$this->add_inline_editing_attributes( 'service_1_description', 'advanced' );
		$this->add_inline_editing_attributes( 'service_2_title', 'none' );
		$this->add_inline_editing_attributes( 'service_2_description', 'advanced' );
		$this->add_inline_editing_attributes( 'service_3_title', 'none' );
		$this->add_inline_editing_attributes( 'service_3_description', 'advanced' );
		include get_stylesheet_directory() . '/elementor-templates/custom-ourservices-template.php';
	}

	protected function _content_template() {
		?>
		<#
		view.addInlineEditingAttributes( 'service_1_title', 'none' );
		view.addInlineEditingAttributes( 'service_1_description', 'advanced' );
		view.addInlineEditingAttributes( 'service_2_title', 'none' );
		view.addInlineEditingAttributes( 'service_2_description', 'advanced' );
		view.addInlineEditingAttributes( 'service_3_title', 'none' );
		view.addInlineEditingAttributes( 'service_3_description', 'advanced' );

		var service_1_bg_image = settings.service_1_bg_image.url ? settings.service_1_bg_image.url : '';
		var service_2_bg_image = settings.service_2_bg_image.url ? settings.service_2_bg_image.url : '';
		var service_3_bg_image = settings.service_3_bg_image.url ? settings.service_3_bg_image.url : '';
		#>

		<div class="w-full">
			<section class="self-stretch bg-elements-neutral-4 flex flex-col items-center justify-center py-[140px] gap-[80px] text-general-1-secondary">

				<!-- Service 1 Output -->
				<div class="self-stretch flex flex-row items-center justify-start gap-[60px] text-29xl mq925:flex-col">
					<div class="flex-1 flex flex-col items-start justify-start gap-[30px]">
						<h3 class="self-stretch relative tracking-[-0.02em] leading-[54px] font-medium service-1-title elementor-inline-editing" {{{ view.getRenderAttributeString( 'service_1_title' ) }}}>
						{{{ settings.service_1_title }}}
						</h3>
						<div class="self-stretch relative text-5xl tracking-[-0.01em] leading-[30px] font-medium text-general-1-secondary-variant service-1-description elementor-inline-editing" {{{ view.getRenderAttributeString(
						'service_1_description' ) }}}>
						{{{ settings.service_1_description }}}
					</div>
				</div>
				<div class="flex-[0.8559] mq925:w-full mq925:min-h-[664px] h-[664px] flex flex-col items-end justify-end p-10 box-border gap-2.5 bg-cover bg-no-repeat bg-[top]" style="background-image: url('{{ service_1_bg_image }}');">
				</div>
		</div>

		<!-- Service 2 Output -->
		<div class="self-stretch flex flex-row items-center justify-start gap-[60px] text-29xl mq925:flex-col">
			<div class="flex-1 flex flex-col items-start justify-start gap-[30px]">
				<h3 class="self-stretch relative tracking-[-0.02em] leading-[54px] font-medium service-2-title elementor-inline-editing" {{{ view.getRenderAttributeString( 'service_2_title' ) }}}>
				{{{ settings.service_2_title }}}
				</h3>
				<div class="self-stretch relative text-5xl tracking-[-0.01em] leading-[30px] font-medium text-general-1-secondary-variant service-2-description elementor-inline-editing" {{{ view.getRenderAttributeString(
				'service_2_description' ) }}}>
				{{{ settings.service_2_description }}}
			</div>
		</div>
		<div class="flex-[0.8559] mq925:w-full mq925:min-h-[664px] h-[664px] flex flex-col items-end justify-end p-10 box-border gap-2.5 bg-cover bg-no-repeat bg-[top]" style="background-image: url('{{ service_2_bg_image }}');">
		</div>
		</div>

		<!-- Service 3 Output -->
		<div class="self-stretch flex flex-row items-center justify-start gap-[60px] text-29xl mq925:flex-col">
			<div class="flex-1 flex flex-col items-start justify-start gap-[30px]">
				<h3 class="self-stretch relative tracking-[-0.02em] leading-[54px] font-medium service-3-title elementor-inline-editing" {{{ view.getRenderAttributeString( 'service_3_title' ) }}}>
				{{{ settings.service_3_title }}}
				</h3>
				<div class="self-stretch relative text-5xl tracking-[-0.01em] leading-[30px] font-medium text-general-1-secondary-variant service-3-description elementor-inline-editing" {{{ view.getRenderAttributeString(
				'service_3_description' ) }}}>
				{{{ settings.service_3_description }}}
			</div>
		</div>
		<div class="flex-[0.8559] mq925:w-full mq925:min-h-[664px] h-[664px] flex flex-col items-end justify-end p-10 box-border gap-2.5 bg-cover bg-no-repeat bg-[top]" style="background-image: url('{{ service_3_bg_image }}');">
		</div>
		</div>

		</section>
		</div>

		<?php
	}
}