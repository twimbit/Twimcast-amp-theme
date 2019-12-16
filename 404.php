<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Page not found</title>
	<style scoped>
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
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: row;
		}

		.left {
			width: 500px;
			height: 330px;
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

		.right {
			width: 450px;
		}


		@media (max-width: 768px) {
			.container {
				flex-direction: column;
			}
		}

		@media (min-width: 320px) and (max-width: 768px) {
			.left {
				width: 100%;
				order: 2;
			}

			.number {
				color: #f0696e;
				font-size: 100px;
				font-weight: bold;
				line-height: 170px;
				margin: 0;
				text-align: center;
			}

			.title {
				color: #000;
				font-size: 18px;
				font-weight: 500;
				line-height: 1.3em;
				margin-bottom: 50px;
			}

			.button {
				text-transform: uppercase;
				letter-spacing: 2.1px;
				background-color: #f0696e;
				font-size: 18px;
				padding: 14px 16px;
				-webkit-border-radius: 5px;
				border-radius: 5px;
				text-decoration: none;
			}

			.button span {
				color: #fff;
				font-size: 14px;
			}

			.right {
				width: 100%;
				order: 1;
			}
		}
	</style>
</head>

<body>

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
		<div class="right">
			<img width="800" height="600" src="https://twimbit.com/wp-content/uploads/2019/05/404-gif.gif" data-src="https://twimbit.com/wp-content/uploads/2019/05/404-gif.gif" class="attachment-large size-large lazyloaded" alt="">
		</div>
	</div>
</body>

</html>