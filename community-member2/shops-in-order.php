<?php include 'header.php'; ?>



<style>
	.filter-text {
		font-size: 20px;
		font-weight: 600;
		line-height: 27px;
		letter-spacing: 0em;
	}

	.filter-text svg {
		margin-right: 14px;
	}

	.btn {
		width: 278px;
		height: 55px;
		top: 240px;
		left: 31px;
		padding: 14px, 77px, 14px, 76px;
		border-radius: 10px;
		font-size: 20px;
		font-weight: 600;
		line-height: 27px;
		letter-spacing: 0em;
		text-align: center;

	}

	.btn-brown {
		background-color: #BC9B63;
		border: none;
	}

	.btn-dark {
		background-color: #01051D !important;
		border: none;
	}

	.btn-red {

		border: none;
		background-color: #9D0000 !important;
	}

	.product-information tr td {
		font-size: 16px;
		font-weight: 300;
		line-height: 22px;
		letter-spacing: 0em;
		text-align: right;
	}

	.card-footer-text {
		font-size: 20px;
		font-weight: 400;
		line-height: 27px;
		letter-spacing: 0em;
		text-align: center;
	}

	.order-management-cards {
		width: 32%;
	}


	/* width */
	::-webkit-scrollbar {
		width: 20px;
	}

	/* Track */
	::-webkit-scrollbar-track {
		box-shadow: inset 0 0 5px grey;
		border-radius: 10px;
	}

	/* Handle */
	::-webkit-scrollbar-thumb {
		background: red;
		border-radius: 10px;
	}

	/* Handle on hover */
	::-webkit-scrollbar-thumb:hover {
		background: #b30000;
	}

	.btn-gray,
	.btn-gray:hover {
		background-color: #E4E4E4;
		border: none;
	}


	.ts-text {
		text-align: right;
		font-size: 20px;
		font-weight: 600;
	}

	@media screen and (max-width: 480px) {
		.order-management-cards {
			width: 100%;
		}

		.product-information tr td {
			font-size: 13px;
		}

	}
</style>

<div class="container">

	<div class="d-flex flex-row gap-3 mt-3 flex-wrap" style="">

		<div class="card order-management-cards col-xl-4 rounded-3">
			<!-- Photo -->

			<div class=""
				style="background-image: url(media/shop-logo1.png); background-size: cover; border-top-left-radius: 8px; border-top-right-radius: 8px; height: 200px; background-repeat: no-repeat; background-position: center;">
				<!-- <img src="media/shop-logo1.png" style="object-fit: cover; width: 100%; height: 150px;" alt=""> -->
			</div>


			<p class="card-footer-text pt-4 pb-0 m-0">
				<strong>שם החנות:</strong> אקסוס<br>
				<strong>כתובת החנות:</strong> רבי עקיבא 148 בני ברק
			</p>

			<div class="card-body px-3 m-auto">
				<div class="d-flex flex-column gap-3">
					<a href="" class="btn btn-gray">← חייגו לחנות</a>
					<a href="" class="btn btn-dark">← לשוברי החנות</a>
				</div>

			</div>

		</div>


		<div class="card order-management-cards col-xl-4 rounded-3">
			<!-- Photo -->

			<div class=""
				style="background-image: url(media/shop-logo1.png); background-size: cover; border-top-left-radius: 8px; border-top-right-radius: 8px; height: 200px; background-repeat: no-repeat; background-position: center;">
				<!-- <img src="media/shop-logo1.png" style="object-fit: cover; width: 100%; height: 150px;" alt=""> -->
			</div>


			<p class="card-footer-text pt-4 pb-0 m-0">
				<strong>שם החנות:</strong> אקסוס<br>
				<strong>כתובת החנות:</strong> רבי עקיבא 148 בני ברק
			</p>

			<div class="card-body px-3 m-auto">
				<div class="d-flex flex-column gap-3">
					<a href="" class="btn btn-gray">← חייגו לחנות</a>
					<a href="" class="btn btn-dark">← לשוברי החנות</a>
				</div>

			</div>

		</div>



		<div class="card order-management-cards col-xl-4 rounded-3">
			<!-- Photo -->

			<div class=""
				style="background-image: url(media/shop-logo1.png); background-size: cover; border-top-left-radius: 8px; border-top-right-radius: 8px; height: 200px; background-repeat: no-repeat; background-position: center;">
				<!-- <img src="media/shop-logo1.png" style="object-fit: cover; width: 100%; height: 150px;" alt=""> -->
			</div>


			<p class="card-footer-text pt-4 pb-0 m-0">
				<strong>שם החנות:</strong> אקסוס<br>
				<strong>כתובת החנות:</strong> רבי עקיבא 148 בני ברק
			</p>

			<div class="card-body px-3 m-auto">
				<div class="d-flex flex-column gap-3">
					<a href="" class="btn btn-gray">← חייגו לחנות</a>
					<a href="" class="btn btn-dark">← לשוברי החנות</a>
				</div>

			</div>

		</div>

		<div class="card order-management-cards col-xl-4 rounded-3">
			<!-- Photo -->

			<div class=""
				style="background-image: url(media/shop-logo1.png); background-size: cover; border-top-left-radius: 8px; border-top-right-radius: 8px; height: 200px; background-repeat: no-repeat; background-position: center;">
				<!-- <img src="media/shop-logo1.png" style="object-fit: cover; width: 100%; height: 150px;" alt=""> -->
			</div>


			<p class="card-footer-text pt-4 pb-0 m-0">
				<strong>שם החנות:</strong> אקסוס<br>
				<strong>כתובת החנות:</strong> רבי עקיבא 148 בני ברק
			</p>

			<div class="card-body px-3 m-auto">
				<div class="d-flex flex-column gap-3">
					<a href="" class="btn btn-gray">← חייגו לחנות</a>
					<a href="" class="btn btn-dark">← לשוברי החנות</a>
				</div>

			</div>

		</div>


		<div class="card order-management-cards col-xl-4 rounded-3">
			<!-- Photo -->

			<div class=""
				style="background-image: url(media/shop-logo1.png); background-size: cover; border-top-left-radius: 8px; border-top-right-radius: 8px; height: 200px; background-repeat: no-repeat; background-position: center;">
				<!-- <img src="media/shop-logo1.png" style="object-fit: cover; width: 100%; height: 150px;" alt=""> -->
			</div>


			<p class="card-footer-text pt-4 pb-0 m-0">
				<strong>שם החנות:</strong> אקסוס<br>
				<strong>כתובת החנות:</strong> רבי עקיבא 148 בני ברק
			</p>

			<div class="card-body px-3 m-auto">
				<div class="d-flex flex-column gap-3">
					<a href="" class="btn btn-gray">← חייגו לחנות</a>
					<a href="" class="btn btn-dark">← לשוברי החנות</a>
				</div>

			</div>

		</div>


		<div class="card order-management-cards col-xl-4 rounded-3">
			<!-- Photo -->

			<div class=""
				style="background-image: url(media/shop-logo1.png); background-size: cover; border-top-left-radius: 8px; border-top-right-radius: 8px; height: 200px; background-repeat: no-repeat; background-position: center;">
				<!-- <img src="media/shop-logo1.png" style="object-fit: cover; width: 100%; height: 150px;" alt=""> -->
			</div>


			<p class="card-footer-text pt-4 pb-0 m-0">
				<strong>שם החנות:</strong> אקסוס<br>
				<strong>כתובת החנות:</strong> רבי עקיבא 148 בני ברק
			</p>

			<div class="card-body px-3 m-auto">
				<div class="d-flex flex-column gap-3">
					<a href="" class="btn btn-gray">← חייגו לחנות</a>
					<a href="" class="btn btn-dark">← לשוברי החנות</a>
				</div>

			</div>

		</div>

	</div>

</div>
</div>

</div>
</div>


<?php include 'footer.php'; ?>