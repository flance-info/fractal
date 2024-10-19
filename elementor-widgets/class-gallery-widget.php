<?php

use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class FractalGallery_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'stm-gallery';
	}

	public function get_title() {
		return __( 'Gallery Fractal Widget', 'fractal' );
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
		include get_stylesheet_directory() . '/elementor-templates/custom-gallery-template.php';
	}

	protected function _content_template() {
		?>
		<div class="w-full">
			<section class="self-stretch flex flex-row items-start justify-center
		mq450:grid-cols-[minmax(240px,_1fr)]
		mq925:grid-cols-[repeat(2,_minmax(240px,_416px))] mq925:overflow-x-auto mq925:flex-nowrap mq925:justify-start ">

				<img class="h-80 flex-1 relative  object-cover min-w-[314px] mq450:w-full" loading="lazy" alt="" src="/wp-content/themes/fractal/fractal/build/luxurious-interior-with-ocean-view@2x.webp">

				<img class="h-80 flex-1 relative  object-cover min-w-[314px] mq450:w-full" loading="lazy" alt="" src="/wp-content/themes/fractal/fractal/build/modern-architecture-and-luxury-car1@2x.webp">

				<img class="h-80 flex-1 relative  object-cover min-w-[314px] mq450:w-full" loading="lazy" alt="" src="/wp-content/themes/fractal/fractal/build/modern-colorful-office-interior@2x.webp">

				<img class="h-80 flex-1 relative  object-cover min-w-[314px] mq450:w-full" loading="lazy" alt="" src="/wp-content/themes/fractal/fractal/build/luxurious-seaside-living-room-1@2x.webp">

				<img class="h-80 flex-1 relative  object-cover min-w-[314px] mq450:w-full" loading="lazy" alt="" src="/wp-content/themes/fractal/fractal/build/miniature-modern-house-model@2x.webp">

				<img class="h-80 flex-1 relative  object-cover min-w-[314px] mq450:w-full" loading="lazy" alt="" src="/wp-content/themes/fractal/fractal/build/contemporary-pastel-oasis@2x.webp">
			</section>
		</div>
		<?php
	}
}
