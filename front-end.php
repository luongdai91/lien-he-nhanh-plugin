<?php

final class LienHeNhanh_LD {

	protected static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function __construct() {
		add_action( 'plugins_loaded', array( $this, 'init_hooks' ) );
	}

	public function init_hooks() {
		add_action( 'wp_footer', array( $this, 'ld_frontend' ) ); // add frontend to footer	
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) ); //add style to frontend	
	}

	//add style to frontend
	public function enqueue_scripts() {
		wp_enqueue_style( 'ld-style', LHN_LD_URL . 'css/style.css', array() );
	}


	// add frontend to footer theme
	public function ld_frontend() { ?>
		<div class="sticky-btns">
		    <div class="sticky-btns__wrapper">
				<?php if (get_option('ld_phone')): ?>
				<a class="sticky-btns__item" href="tel:<?php esc_html_e( get_option('ld_phone'), 'lhn_fe' ); ?>">
		            <div class="sticky-btns__icon"><img src="<?php echo LHN_LD_URL.'img/phone-call.png'; ?>" alt=""></div><span>Điện thoại</span>
		        </a>
				<?php endif;
				if (get_option('ld_messenger')):
				?>
				<a class="sticky-btns__item" href="<?php esc_html_e( get_option('ld_messenger'), 'lhn_fe' ); ?>" target="_blank" rel="nofollow">
		            <div class="sticky-btns__icon sticky-btns__icon--messenger"><img src="<?php echo LHN_LD_URL.'img/icon-messenger.png'; ?>" alt=""></div><span>Messenger</span>
		        </a>
				<?php endif;
				if (get_option('ld_messenger')):
				?>
		        <a class="sticky-btns__item" href="https://zalo.me/<?php esc_html_e( get_option('ld_zalo'), 'lhn_fe' ); ?>" target="_blank" rel="nofollow">
		            <div class="sticky-btns__icon sticky-btns__icon--zalo"><img src="<?php echo LHN_LD_URL.'img/icon-zalo-chat-white.png'; ?>" alt=""></div><span>Zalo</span>
		        </a>
				<?php endif;
				if (get_option('ld_messenger')):
				?>
		        <a class="sticky-btns__item" href="<?php esc_html_e( get_option('ld_facebook'), 'lhn_fe' ); ?>" target="_blank" rel="nofollow">
		            <div class="sticky-btns__icon sticky-btns__icon--facebook"><img src="<?php echo LHN_LD_URL.'img/facebook.png'; ?>" alt=""></div><span>Facebook</span>
		        </a>
				<?php endif;
				?>
			</div>
			<?php if (get_option('ld_messenger') || get_option('ld_phone') || get_option('ld_zalo') || get_option('ld_facebook')):
				?>
			<a class="sticky-btns__toggle" href="/lien-he">
		        <div class="sticky-btns__icon"><img src="<?php echo LHN_LD_URL.'img/icon-grid.png'; ?>" alt=""></div><span>Liên hệ</span>
		    </a>
			<?php endif;
				?>
		</div>
		<script>
		    jQuery( document ).ready(function() {
		        jQuery('.sticky-btns__toggle').click(function (e) {
		            e.preventDefault();
		            jQuery('.sticky-btns').toggleClass('active');
		        });
		    });
		</script>
		<?php
	}
}
?>