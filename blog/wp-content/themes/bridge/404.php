<?php $bridge_qode_options = bridge_qode_return_global_options(); ?>
<?php get_header(); ?>

	<?php get_template_part( 'title' ); ?>

	<style>
		.container .page_not_found {
			background: #e1d3e4;
			padding: 38px;
			text-align: left;
		}
		.container .page_not_found h1 {
        margin: 0.3em 0 0.6em;
		}
		.container .page_not_found p {
			font-size: 1.1em;
			margin: 0 0 0.8em;
		}
		.container .page_not_found a, .container .page_not_found a:hover {
			text-decoration: underline;
		}
		.page_not_found .col-4 {
			padding: 0 32px;
		}
		.page_not_found .auto {
			max-width: 100%;
			height: auto;
		}
		@media (min-width: 768px) {
			.container .page_not_found {
				padding: 76px;
			}
			.page_not_found .row {
				display: flex;
				flex-wrap: wrap;
			}
			.page_not_found .col-4, .page_not_found .col-8 {
				-webkit-box-flex: 0;
				box-sizing: border-box;
			}
			.page_not_found .col-4 {
				-ms-flex: 0 0 33.333333%;
				flex: 0 0 33.333333%;
				max-width: 33.333333%;
				padding: 0 24px;
			}
			.page_not_found .col-8 {
				-ms-flex: 0 0 66.666667%;
				flex: 0 0 66.666667%;
				max-width: 66.666667%;
			}

			.page_not_found .col-4 {
				padding: 0 32px;
			}
		}
	</style>

	<div class="container">
		<div class="container_inner default_template_holder">
			<div class="page_not_found">
				<div class="row">
					<div class="col-8">
						<img class="auto" src="<?php bloginfo("template_url");?>/img/404.jpg" alt="">
					</div>
					<div class="col-4">
						<h1>DESCULPE</h1>
						<p><?php if($bridge_qode_options['404_subtitle'] != ""): echo esc_html( $bridge_qode_options['404_subtitle'] ); else: ?> <?php esc_html_e('The page you are looking for is not found', 'bridge'); ?> <?php endif;?></p>
						<p><?php if($bridge_qode_options['404_text'] != ""): echo esc_html( $bridge_qode_options['404_text'] ); else: ?> <?php esc_html_e('The page you are looking for does not exist. It may have been moved, or removed altogether. Perhaps you can return back to the site\'s homepage and see if you can find what you are looking for.', 'bridge'); ?> <?php endif;?></p>
						<div class="separator	transparent center	" style="margin-top:16px;"></div>
						<p>
							<a itemprop="url" class="link" href="javascript:history.back();">VOLTAR PARA A PÁGINA ANTERIOR</a>
						</p>
						<div class="separator	transparent center	" style="margin-top:16px;"></div>
						<p>
							<a itemprop="url" class="link" href="<?php echo esc_url(home_url( '/' )); ?>"><?php if($bridge_qode_options['404_backlabel'] != ""): echo esc_html( $bridge_qode_options['404_backlabel'] ); else: ?> <?php esc_html_e('Back to homepage', 'bridge'); ?> <?php endif;?></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
