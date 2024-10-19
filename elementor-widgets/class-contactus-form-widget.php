<?php

use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class ContactUsForm_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'stm-contactusform';
	}

	public function get_title() {
		return __( 'Contact Form Fractal Widget', 'fractal' );
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
		include get_stylesheet_directory() . '/elementor-templates/custom-contactusform-template.php';
	}

	protected function _content_template() {
		?>
		<div class="w-full">
				<section class="self-stretch bg-general-1-secondary flex flex-row items-center justify-start
		 box-border relative
		max-w-full w-full text-center text-base text-general-white
		font-button-space-grotesk mq925:py-[65px]
		 mq925:box-border  mq1400:box-border">
		<div class="ml-auto bg-general-1-primary self-stretch flex-1"></div>
		<div class="max-w-[1170px] w-full bg-general-1-primary py-[100px]">


			<?php echo do_shortcode( '[contact-form-7 id="c84e357" title="Contact footer"]' ); ?>

		</div>
		<div class="ml-auto flex-1"></div>
	</section>
		</div>
		<?php
	}
}
