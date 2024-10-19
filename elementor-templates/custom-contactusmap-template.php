<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<div class="w-full">
	<section class="self-stretch min-h-[640px] relative bg-general-1-secondary
		w-full text-left text-base text-general-1-primary
		font-button-space-grotesk mq450:h-auto mq450:min-h-[640] flex flex-row	flex flex-col justify-center items-center">

		<div class="max-w-[1170px] w-full flex flex-row justify-between min-h-[640] mq925:flex-col">
			<div class="bg-white">
				<div class="absolute w-[50%] left-0 bg-general-1-secondary mq925:relative mq925:w-full">
					<div class="left-0 w-[100%] h-full">
						<img class="  h-full  bottom-[0px]  max-h-full w-[80%] min-h-[640px] mr-[190px] float-right object-cover
							mq925:m-0 mq925:w-full mq925:relative mq925:float-none" alt="" src="/wp-content/themes/fractal/fractal/build/google-maps1@2x.webp">

						<img class="absolute bottom-[0px] w-80 h-[540px] object-cover z-[1] right-[30px] mq925:hidden " loading="lazy" alt="" src="/wp-content/themes/fractal/fractal/build/shutterstock-94330351-1-1@2x.webp">
						<img class="absolute hidden bottom-[-100px] w-[92%] h-[220px] object-initial z-[1] right-[0px] mq925:block" loading="lazy" alt="" src="/wp-content/themes/fractal/fractal/build/burja.png">

					</div>
				</div>
			</div>
			<div class=" w-[50%] items-start justify-start gap-[78px]
				max-w-full pt-[100px] flex flex-col mq925:stm-width-180-25 ">
				<div class="self-stretch flex flex-col items-start justify-start gap-8">
					<h2 class="relative tracking-[0.25em] leading-[22px] uppercase">
						Contact Us
					</h2>
					<div class="self-stretch flex flex-row items-start justify-start flex-wrap
						 content-start gap-[30px] text-general-white font-body-b4-merriweather-13 mq925:flex-col">
						<div class="flex-1 relative leading-[26px] inline-block min-w-[175px]">
							Visit one of our many Fractal WP Offices in United States.
						</div>
						<div class="flex-1 flex flex-col items-start justify-start pt-1 px-0 pb-0 box-border min-w-[175px] font-button-space-grotesk mq925:stm-cal-100-60">
							<select class="w-full placeholder-current
										 [outline:none]
										h-[60px] flex-1 shadow-[0px_-1px_0px_rgba(255,_255,_255,_0.5)_inset]
										overflow-hidden flex flex-row items-start justify-start py-[10px]
										px-[15px] border-general-9-secondary-variant border-[1px] border-solid box-border
										 font-medium font-button-space-grotesk
										text-base  min-w-[195px] z-[1] text-white bg-general-1-secondary">
								<option value="dubai" selected="">Dubai Office</option>
								<option value="type1">Type 1</option>
							</select>
						</div>
					</div>
				</div>
				<div class="self-stretch flex flex-row items-start justify-start flex-wrap content-start gap-[35px] text-5xl text-general-white mq925:stm-cal-100-60">
					<div class="flex-1 flex flex-col items-start justify-start gap-[78px] min-w-[172px]">
						<div class="flex flex-col items-start justify-start py-0 pl-0 pr-5 gap-[15px]">
							<div class="relative text-base tracking-[0.25em] leading-[22px] uppercase text-general-1-primary">
								Phone & Fax —
							</div>
							<a href="tel:+971564744155" class="[text-decoration:none]  text-general-white relative tracking-[-0.01em] leading-[30px] font-medium mq450:text-lgi mq450:leading-[24px]">
								+971 (56) 474 4155
							</a>
							<a href="tel:+971564744156" class="[text-decoration:none]  text-general-white relative tracking-[-0.01em] leading-[30px] font-medium mq450:text-lgi mq450:leading-[24px]">
								+971 (56) 474 4156
							</a>
						</div>
						<div class="self-stretch flex flex-col items-start justify-start gap-[15px] text-base text-general-1-primary">
							<div class="relative tracking-[0.25em] leading-[22px] uppercase">
								Email —
							</div>
							<a href="mailto:info@fractaldubai.com" class="[text-decoration:none] text-general-1-primary m-0 relative text-5xl tracking-[-0.01em] leading-[30px] font-medium font-[inherit] mq450:text-lgi mq450:leading-[24px]">
								info@fractaldubai.com
							</a>
						</div>
					</div>
					<div class="flex-1 flex flex-col items-start justify-start gap-3.5 min-w-[175px] text-base text-general-1-primary">
						<div class="relative tracking-[0.25em] leading-[22px] uppercase">
							Address —
						</div>
						<div class="self-stretch flex flex-col items-start justify-start gap-[30px] text-5xl text-general-white ">
							<a href="https://www.google.com/maps/search/Office+1004,+Conrad+Business+Tower,+Trade+Centre+First,+485054+,+Dubai,+UAE/@25.2260619,55.2808463,809m/data=!3m2!1e3!4b1?entry=ttu&g_ep=EgoyMDI0MTAwOS4wIKXMDSoASAFQAw%3D%3D"
							   class="[text-decoration:none]  m-0 relative text-inherit tracking-[-0.01em] leading-[30px] font-medium font-[inherit] mq450:text-lgi mq450:leading-[24px]">
								Office 1004, Conrad Business Tower, Trade Centre First, 485054
								Dubai, UAE
							</a>
							<div onclick="openModal()" class="flex flex-row items-center justify-start relative gap-4 text-right text-base">


								<div class="arrow-container">
									<span class="text tracking-[0.25em] leading-[22px]  uppercase z-[1]">Get direction</span>
									<div class="circle">
										<img class="stm-mb w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/navigation2.webp">
										<img class="stm-mb1 w-[70px] relative h-[70px]" alt="" src="/wp-content/themes/fractal/fractal/build/moved-arrow.webp">
									</div>

								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>



