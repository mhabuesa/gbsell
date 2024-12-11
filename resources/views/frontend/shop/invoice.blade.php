<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="images/favicon.png" rel="icon">
	<title>{{ $shop->name }} - Invoice</title>
	<meta name="author" content="harnishdesign.net">


	<!-- Stylesheet -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
		integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<style>
		:root,
		[data-bs-theme="light"] {
			--bs-themecolor: #0071cc;
			--bs-themecolor-rgb: 0, 113, 204;
			--bs-themehovercolor: #005599;
			--bs-themehovercolor-rgb: 0, 84.75, 153;
			--bs-link-color: var(--bs-themecolor);
			--bs-link-color-rgb: var(--bs-themecolor-rgb);
			--bs-link-hover-color: var(--bs-themehovercolor);
			--bs-link-hover-color-rgb: var(--bs-themehovercolor-rgb);
			--bs-primary: var(--bs-themecolor);
			--bs-primary-rgb: var(--bs-themecolor-rgb);
			--bs-primary-text-emphasis: #002d52;
			--bs-primary-bg-subtle: #cce3f5;
			--bs-primary-border-subtle: #99c6eb;
			--bs-body-color: #404040;
			--bs-body-color-rgb: 64, 64, 64;
			--bs-heading-color: var(--bs-emphasis-color);
			--bs-body-font-family: Poppins, sans-serif;
		}

		/* =================================== */
					/*  Basic Style
		/* =================================== */
		body {
			background: #e7e9ed;
			font-size: 14px;
			line-height: 22px;
		}

		form {
			padding: 0;
			margin: 0;
			display: inline;
		}

		img {
			vertical-align: inherit;
		}

		p {
			line-height: 1.9;
		}

		iframe {
			border: 0 !important;
		}

		.table,
		.table> :not(caption)>*>* {
			--bs-table-color: #404040;
		}

		/* =================================== */
				/*  Helpers Classes
		/* =================================== */
		/* Border Radius */
		.rounded-top-0 {
			border-top-left-radius: 0px !important;
			border-top-right-radius: 0px !important;
		}

		.rounded-bottom-0 {
			border-bottom-left-radius: 0px !important;
			border-bottom-right-radius: 0px !important;
		}

		.rounded-left-0 {
			border-top-left-radius: 0px !important;
			border-bottom-left-radius: 0px !important;
		}

		.rounded-right-0 {
			border-top-right-radius: 0px !important;
			border-bottom-right-radius: 0px !important;
		}

		/* Text Size */
		.text-0 {
			font-size: 11px !important;
			font-size: 0.6875rem !important;
		}

		.text-1 {
			font-size: 12px !important;
			font-size: 0.75rem !important;
		}

		.text-2 {
			font-size: 14px !important;
			font-size: 0.875rem !important;
		}

		.text-3 {
			font-size: 16px !important;
			font-size: 1rem !important;
		}

		.text-4 {
			font-size: 18px !important;
			font-size: 1.125rem !important;
		}

		.text-5 {
			font-size: 21px !important;
			font-size: 1.3125rem !important;
		}

		.text-6 {
			font-size: 24px !important;
			font-size: 1.50rem !important;
		}

		.text-7 {
			font-size: 28px !important;
			font-size: 1.75rem !important;
		}

		.text-8 {
			font-size: 32px !important;
			font-size: 2rem !important;
		}

		.text-9 {
			font-size: 36px !important;
			font-size: 2.25rem !important;
		}

		.text-10 {
			font-size: 40px !important;
			font-size: 2.50rem !important;
		}

		.text-11 {
			font-size: calc(1.4rem + 1.8vw) !important;
		}

		@media (min-width: 1200px) {
			.text-11 {
				font-size: 2.75rem !important;
			}
		}

		.text-12 {
			font-size: calc(1.425rem + 2.1vw) !important;
		}

		@media (min-width: 1200px) {
			.text-12 {
				font-size: 3rem !important;
			}
		}

		.text-13 {
			font-size: calc(1.45rem + 2.4vw) !important;
		}

		@media (min-width: 1200px) {
			.text-13 {
				font-size: 3.25rem !important;
			}
		}

		.text-14 {
			font-size: calc(1.475rem + 2.7vw) !important;
		}

		@media (min-width: 1200px) {
			.text-14 {
				font-size: 3.5rem !important;
			}
		}

		.text-15 {
			font-size: calc(1.5rem + 3vw) !important;
		}

		@media (min-width: 1200px) {
			.text-15 {
				font-size: 3.75rem !important;
			}
		}

		.text-16 {
			font-size: calc(1.525rem + 3.3vw) !important;
		}

		@media (min-width: 1200px) {
			.text-16 {
				font-size: 4rem !important;
			}
		}

		.text-17 {
			font-size: calc(1.575rem + 3.9vw) !important;
		}

		@media (min-width: 1200px) {
			.text-17 {
				font-size: 4.5rem !important;
			}
		}

		.text-18 {
			font-size: calc(1.625rem + 4.5vw) !important;
		}

		@media (min-width: 1200px) {
			.text-18 {
				font-size: 5rem !important;
			}
		}

		.text-19 {
			font-size: calc(1.65rem + 4.8vw) !important;
		}

		@media (min-width: 1200px) {
			.text-19 {
				font-size: 5.25rem !important;
			}
		}

		.text-20 {
			font-size: calc(1.7rem + 5.4vw) !important;
		}

		@media (min-width: 1200px) {
			.text-20 {
				font-size: 5.75rem !important;
			}
		}

		.text-21 {
			font-size: calc(1.775rem + 6.3vw) !important;
		}

		@media (min-width: 1200px) {
			.text-21 {
				font-size: 6.5rem !important;
			}
		}

		.text-22 {
			font-size: calc(1.825rem + 6.9vw) !important;
		}

		@media (min-width: 1200px) {
			.text-22 {
				font-size: 7rem !important;
			}
		}

		.text-23 {
			font-size: calc(1.9rem + 7.8vw) !important;
		}

		@media (min-width: 1200px) {
			.text-23 {
				font-size: 7.75rem !important;
			}
		}

		.text-24 {
			font-size: calc(1.95rem + 8.4vw) !important;
		}

		@media (min-width: 1200px) {
			.text-24 {
				font-size: 8.25rem !important;
			}
		}

		.text-25 {
			font-size: calc(2.025rem + 9.3vw) !important;
		}

		@media (min-width: 1200px) {
			.text-25 {
				font-size: 9rem !important;
			}
		}

		/* Line height */
		.line-height-07 {
			line-height: 0.7 !important;
		}

		.line-height-1 {
			line-height: 1 !important;
		}

		.line-height-2 {
			line-height: 1.2 !important;
		}

		.line-height-3 {
			line-height: 1.4 !important;
		}

		.line-height-4 {
			line-height: 1.6 !important;
		}

		.line-height-5 {
			line-height: 1.8 !important;
		}

		/* Font Weight */
		.fw-100 {
			font-weight: 100 !important;
		}

		.fw-200 {
			font-weight: 200 !important;
		}

		.fw-300 {
			font-weight: 300 !important;
		}

		.fw-400 {
			font-weight: 400 !important;
		}

		.fw-500 {
			font-weight: 500 !important;
		}

		.fw-600 {
			font-weight: 600 !important;
		}

		.fw-700 {
			font-weight: 700 !important;
		}

		.fw-800 {
			font-weight: 800 !important;
		}

		.fw-900 {
			font-weight: 900 !important;
		}

		/* Opacity */
		.opacity-0 {
			opacity: 0;
		}

		.opacity-1 {
			opacity: 0.1;
		}

		.opacity-2 {
			opacity: 0.2;
		}

		.opacity-3 {
			opacity: 0.3;
		}

		.opacity-4 {
			opacity: 0.4;
		}

		.opacity-5 {
			opacity: 0.5;
		}

		.opacity-6 {
			opacity: 0.6;
		}

		.opacity-7 {
			opacity: 0.7;
		}

		.opacity-8 {
			opacity: 0.8;
		}

		.opacity-9 {
			opacity: 0.9;
		}

		.opacity-10 {
			opacity: 1;
		}

		/* Background light */
		.bg-light-1 {
			background-color: #e9ecef !important;
		}

		.bg-light-2 {
			background-color: #dee2e6 !important;
		}

		.bg-light-3 {
			background-color: #ced4da !important;
		}

		.bg-light-4 {
			background-color: #adb5bd !important;
		}

		/* Background Dark */
		.bg-dark {
			background-color: #111418 !important;
		}

		.bg-dark-1 {
			background-color: #212529 !important;
		}

		.bg-dark-2 {
			background-color: #343a40 !important;
		}

		.bg-dark-3 {
			background-color: #495057 !important;
		}

		.bg-dark-4 {
			background-color: #6c757d !important;
		}

		hr {
			opacity: 0.15;
		}

		.card-header {
			padding-top: .75rem;
			padding-bottom: .75rem;
		}

		/* Table */
		.table> :not(:last-child)> :last-child>* {
			border-bottom-color: inherit;
		}

		.table:not(.table-sm)> :not(caption)>*>* {
			padding: 0.75rem;
		}

		.table-sm> :not(caption)>*>* {
			padding: 0.3rem;
		}

		.table td.bg-light,
		.table th.bg-light,
		.table tr.bg-light td,
		.table tr.bg-light th {
			background-color: #f8f9fa !important;
		}

		.table td.bg-light-1,
		.table th.bg-light-1,
		.table tr.bg-light-1 td,
		.table tr.bg-light-1 th {
			background-color: #e9ecef !important;
		}

		.table td.bg-light-2,
		.table th.bg-light-2,
		.table tr.bg-light-2 td,
		.table tr.bg-light-2 th {
			background-color: #dee2e6 !important;
		}

		.table td.bg-light-3,
		.table th.bg-light-3,
		.table tr.bg-light-3 td,
		.table tr.bg-light-3 th {
			background-color: #ced4da !important;
		}

		.table td.bg-light-4,
		.table th.bg-light-4,
		.table tr.bg-light-4 td,
		.table tr.bg-light-4 th {
			background-color: #adb5bd !important;
		}

		@media print {
			body {
				-webkit-print-color-adjust: exact;
				color-adjust: exact;
			}

			.table td,
			.table th {
				background-color: transparent !important;
			}

			.table-responsive {
				padding-left: 0.4px;
				padding-right: 0.4px;
				padding-bottom: 0.4px;
			}

			.table td.bg-light,
			.table th.bg-light,
			.table tr.bg-light td {
				background-color: #f8f9fa !important;
			}

			.table td.bg-light-1,
			.table th.bg-light-1 {
				background-color: #e9ecef !important;
			}

			.table td.bg-light-2,
			.table th.bg-light-2 {
				background-color: #dee2e6 !important;
			}

			.table td.bg-light-3,
			.table th.bg-light-3 {
				background-color: #ced4da !important;
			}

			.table td.bg-light-4,
			.table th.bg-light-4 {
				background-color: #adb5bd !important;
			}
		}

		/* =================================== */
                /*  Layouts
        /* =================================== */
		.invoice-container {
			margin: 15px auto;
			padding: 70px;
			max-width: 850px;
			background-color: #fff;
			border: 1px solid #ccc;
			-moz-border-radius: 6px;
			-webkit-border-radius: 6px;
			-o-border-radius: 6px;
			border-radius: 6px;
		}

		@media (max-width: 767px) {
			.invoice-container {
				padding: 35px 20px 70px 20px;
				margin-top: 0px;
				border: none;
				border-radius: 0px;
			}
		}

		/* =================================== */
                /*  Extras
        /* =================================== */
		.btn-primary {
			--bs-btn-color: var(--bs-white);
			--bs-btn-bg: var(--bs-themecolor);
			--bs-btn-border-color: var(--bs-themecolor);
			--bs-btn-hover-color: var(--bs-white);
			--bs-btn-hover-bg: var(--bs-themehovercolor);
			--bs-btn-hover-border-color: var(--bs-themehovercolor);
			--bs-btn-active-color: var(--bs-btn-hover-color);
			--bs-btn-active-bg: var(--bs-themehovercolor);
			--bs-btn-active-border-color: var(--bs-themehovercolor);
		}

		.btn-outline-primary {
			--bs-btn-color: var(--bs-themecolor);
			--bs-btn-border-color: var(--bs-themecolor);
			--bs-btn-hover-bg: var(--bs-themecolor);
			--bs-btn-hover-color: var(--bs-white);
			--bs-btn-hover-border-color: var(--bs-themecolor);
			--bs-btn-active-color: var(--bs-btn-hover-color);
			--bs-btn-active-bg: var(--bs-themehovercolor);
			--bs-btn-active-border-color: var(--bs-themehovercolor);
		}

		.progress,
		.progress-stacked {
			--bs-progress-bar-bg: var(--bs-themecolor);
		}

		.pagination {
			--bs-pagination-active-bg: var(--bs-themecolor);
			--bs-pagination-active-border-color: var(--bs-themecolor);
		}

		/* Pagination */
		.page-link {
			border-color: #f4f4f4;
			border-radius: 0.25rem;
			margin: 0 0.3rem;
		}

		.page-item.disabled .page-link {
			border-color: #f4f4f4;
		}
	</style>
</head>

<body>
	<!-- Container -->
	<div class="container-fluid invoice-container">
		<!-- Header -->
		<header>
			<div class="row align-items-center gy-3">
				<div class="col-sm-7 text-center text-sm-start">
					@if ($shop->logo)
                    <img id="logo" src="{{asset($shop->logo)}}" width="150" title="{{$shop->name}}" alt="{{$shop->name}}">
                    @else
                        <h4 class="text-7 mb-0 text-capitalize text-primary">{{$shop->name}}</h4>
                    @endif
				</div>
				<div class="col-sm-5 text-center text-sm-end">
					<h4 class="text-7 mb-0">Invoice</h4>
				</div>
			</div>
			<hr>
		</header>

		<!-- Main Content -->
		<main>
			<div class="row">
				<div class="col-sm-6"><strong>Date:</strong> {{$order->created_at->format('d/M/Y')}}</div>
				<div class="col-sm-6 text-sm-end"> <strong>Order ID:</strong> <br> {{$order->order_id}}</div>

			</div>
			<hr>
			<div class="row">
				<div class="col-sm-6 text-sm-end order-sm-1"> <strong>Pay To:</strong>
					<address>
						{{$bill->name}}<br>
						{{$bill->address}}<br>
						{{$bill->phone}}<br>
						{{$bill->email}}
					</address>
				</div>
				<div class="col-sm-6 order-sm-0"> <strong>Invoiced To:</strong>
					<address>
						{{$shop->name}}<br>
						{{$shop->address}}<br>
						{{$shop->phone}}<br>
						{{$shop->email}}
					</address>
				</div>
			</div>
			<div class="table-responsive">
				<table class="table border mb-0">
					<thead>
						<tr class="bg-light">
							<td class="col-1"><strong>#</strong></td>
							<td class="col-6"><strong>Product</strong></td>
							<td class="col-2 text-center"><strong>Variant</strong></td>
							<td class="col-1 text-center"><strong>QTY</strong></td>
							<td class="col-2 text-end"><strong>Amount</strong></td>
						</tr>
					</thead>
					<tbody>
                        @foreach ($products as $sl=>$product)
                            <tr>
                                <td class="col-1">{{$sl+1}}</td>
                                <td class="col-6 text-1">{{$product->products->name}}</td>
                                <td class="col-2 text-center">{{$product->attribute->name}}/{{$product->color->name}}</td>
                                <td class="col-1 text-center">{{$product->quantity}}</td>
                                <td class="col-2 text-end"> &#2547;{{$product->price}}</td>
                            </tr>
                        @endforeach
					</tbody>
				</table>
			</div>
			<div class="table-responsive">
				<table class="table border border-top-0 mb-0">
					<tr class="bg-light">
						<td class="text-end"><strong>Sub Total:</strong></td>
						<td class="col-sm-2 text-end"> &#2547;{{$order->subtotal}}</td>
					</tr>
					<tr class="bg-light">
						<td class="text-end"><strong>Charge:</strong></td>
						<td class="col-sm-2 text-end">&#2547;{{$order->charge}}</td>
					</tr>
					<tr class="bg-light">
						<td class="text-end"><strong>Total:</strong></td>
						<td class="col-sm-2 text-end">&#2547;{{$order->total}}/=</td>
					</tr>
				</table>
			</div>
		</main>
		<!-- Footer -->
		<footer class="text-center mt-4">
			<p class="text-1"><strong>NOTE :</strong> This is computer generated receipt and does not require physical
				signature.</p>
			<div class="btn-group btn-group-sm d-print-none"> <a href="javascript:window.print()"
					class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-print"></i> Print &
					Download</a> </div>
		</footer>
	</div>
</body>

</html>
