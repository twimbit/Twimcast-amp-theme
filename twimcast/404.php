<style>
	body {
		margin: 0;
		font-family: aktiv-grotesk, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
		font-size: 1rem;
		font-weight: 400;
		line-height: 1.5;
		color: #333333;
		background-color: #fff;
	}

	.container {
		height: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.left {
		width: 500px;
		height: 400px;
		text-align: center;
	}

	.number {
		color: #f0696e;
		font-size: 199px;
		font-weight: bold;
		line-height: 170px;
		margin: 0;
		text-align: center;
	}

	.button {
		text-transform: uppercase;
		letter-spacing: 2.1px;
		background-color: #f0696e;
		/* border-radius: 0px 0px 0px 0px; */
		font-size: 18px;
		padding: 20px 40px;
		-webkit-border-radius: 5px;
		border-radius: 5px;
		text-decoration: none;
	}

	.title {
		color: #000000;
		font-size: 23px;
		font-weight: 500;
		line-height: 1.3em;
		/* text-align: center; */
		margin-bottom: 50px;
	}

	.button span {
		color: #fff;
	}
</style>

<div class="container">
	<div class="left">
		<p class="number">404</p>
		<h3 class="title">Oop's the page you are looking hasn't born yet</h3>
		<a href="<?php echo home_url(); ?>" class="button" role="button">
			<span class="elementor-button-content-wrapper">
				<span class="elementor-button-text">Go back to Homepage</span>
			</span>
		</a>
	</div>
	<div class="404-right">
		<img width="800" height="600" src="https://twimbit.com/wp-content/uploads/2019/05/404-gif.gif" data-src="https://twimbit.com/wp-content/uploads/2019/05/404-gif.gif" class="attachment-large size-large lazyloaded" alt="">
	</div>
</div>