<?php

use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class OurBrands_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'ourbrands';
	}

	public function get_title() {
		return __( 'Our Brands Fractal Widget', 'fractal' );
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
		include get_stylesheet_directory() . '/elementor-templates/custom-ourbrands-template.php';
	}

	protected function _content_template() {
		?>
		<div class="w-full">
	<section class="bg-general-white self-stretch flex flex-col items-center justify-center py-[98px]">

		<div class="max-w-[1170px] w-full flex flex-wrap overflow-x-auto items-center
	justify-between flex-wrap mq925:flex-nowrap sm:justify-between gap-4 mq925:gap-[50px] scroll-snap-x scroll-snap-start scroll-smooth ">
			<div class="shrink-0 w-[30vw] hidden mq925:block"></div>
			<img class="relative h-16 " alt="" src="/wp-content/themes/fractal/fractal/build/apple.webp">

			<img class="relative h-16 " alt="" src="/wp-content/themes/fractal/fractal/build/disney.webp">
			<img class="relative h-16 " alt="" src="/wp-content/themes/fractal/fractal/build/google.webp">
			<img class="relative h-16 " alt="" src="/wp-content/themes/fractal/fractal/build/meta.webp">
			<img class="relative h-16 " alt="" src="/wp-content/themes/fractal/fractal/build/nike.webp">
		</div>
	</section>
</div>
		<?php
	}
}
