
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
<style>
	.barcode {
		left: 50%;
		box-shadow: 1px 0 0 1px, 5px 0 0 1px, 10px 0 0 1px, 11px 0 0 1px, 15px 0 0 1px, 18px 0 0 1px, 22px 0 0 1px, 23px 0 0 1px, 26px 0 0 1px, 30px 0 0 1px, 35px 0 0 1px, 37px 0 0 1px, 41px 0 0 1px, 44px 0 0 1px, 47px 0 0 1px, 51px 0 0 1px, 56px 0 0 1px, 59px 0 0 1px, 64px 0 0 1px, 68px 0 0 1px, 72px 0 0 1px, 74px 0 0 1px, 77px 0 0 1px, 81px 0 0 1px, 85px 0 0 1px, 88px 0 0 1px, 92px 0 0 1px, 95px 0 0 1px, 96px 0 0 1px, 97px 0 0 1px, 101px 0 0 1px, 105px 0 0 1px, 109px 0 0 1px, 110px 0 0 1px, 113px 0 0 1px, 116px 0 0 1px, 120px 0 0 1px, 123px 0 0 1px, 127px 0 0 1px, 130px 0 0 1px, 131px 0 0 1px, 134px 0 0 1px, 135px 0 0 1px, 138px 0 0 1px, 141px 0 0 1px, 144px 0 0 1px, 147px 0 0 1px, 148px 0 0 1px, 151px 0 0 1px, 155px 0 0 1px, 158px 0 0 1px, 162px 0 0 1px, 165px 0 0 1px, 168px 0 0 1px, 173px 0 0 1px, 176px 0 0 1px, 177px 0 0 1px, 180px 0 0 1px;
		display: inline-block;
		transform: translateX(-90px);
	}
</style>
<div class="flex flex-col items-center justify-center min-h-screen bg-center bg-cover"
                                    style="background-image: url(https://pesantrend.id/wp-content/uploads/2022/12/ACE07236-bw-.jpg);">
                                    <div class="absolute  opacity-80 inset-0 z-0" style="background-color: #6b4a1f83;"></div>
                                    <div class="max-w-md w-full h-full mx-auto z-10  rounded-3xl" style="background-color: #6B4A1F;">
                                        <div class="flex flex-col">
                                            <div class="bg-white relative drop-shadow-2xl  rounded-3xl p-4 m-4" style="">
                                                <div class="flex-none sm:flex">
                                                    <div class=" relative h-32 w-32   sm:mb-0 mb-3 hidden">
                                                        <img src="https://tailwindcomponents.com/storage/avatars/njkIbPhyZCftc4g9XbMWwVsa7aGVPajYLRXhEeoo.jpg" alt="aji" class=" w-32 h-32 object-cover rounded-2xl">
                                                        <a href="#"
                                                            class="absolute -right-2 bottom-2   -ml-3  text-white p-1 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                                                class="h-4 w-4">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <div class="flex-auto justify-evenly">
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-center  my-1">
                                                                <span class="mr-3 rounded-full bg-white w-8 h-8">
                                    <img src="http://pesan_trend.test/landing-page/assets/img/logo-brown.png" class="h-8 p-1">
                                </span>
								<h2 class="font-medium">Nama Pemesan</h2>
								{{-- <p class="text-red-500 text-xs ml-1">  (Pending)</p> --}}
							</div>
							<div class="ml-auto text-blue-800">No tiket</div>
						</div>
						<div class="border-b border-dashed border-b-2 my-5"></div>
						<div class="flex items-center">
							</div>
	
							{{-- <div class="flex items-center mb-5 p-5 text-sm">
								<div class="flex flex-col">
									<span class="text-sm">Flight</span>
									<div class="font-semibold">Airbus380</div>

								</div>
								<div class="flex flex-col ml-auto">
									<span class="text-sm">Gate</span>
									<div class="font-semibold">B3</div>

								</div>
							</div> --}}
							<div class="mb-4 px-5">
								<div class="flex flex-col text-sm">
									  <div class="flex items-center">
										<label for="file" class="mr-2 text-gray-700">Upload Bukti Transfer:</label>
										<div class="relative">
										  <input type="file" id="file" class="w-full px-3 py-2 rounded-l-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="file" accept=".png, .jpeg, .jpg, .pdf" required autofocus />
										  <span class="input-group-addon absolute inset-y-0 right-0 flex items-center pr-2">
											<i class="fa fa-credit-card"></i>
										  </span>
										</div>
									  </div>
									  <p class="text-yellow-500 text-xs mt-1">Max file size: 5MB. Accepted formats: PDF, PNG, JPG.</p>
									  {{-- <div class="flex items-center py-2">
										<input type="text" size="10" class="w-full px-3 py-2 rounded-l-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="cardNumber" placeholder="Keterangan" autocomplete="cc-number" required autofocus />
										<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
									  </div>
									  
									   --}}
								</div>
				
							</div>
							
	
                            <div class="border-b border-dashed border-b-2 my-5"></div>
							<div class="flex flex-col  justify-center text-sm ">
								<h6 class="font-bold text-center">Hourse - 23/04/2023</h6>

								{{-- <div class="barcode h-20 w-0 inline-block mt-4 relative left-auto"></div> --}}
                                {{-- <p class="text-center"> 1231 - 1231 - 3123 - 1231</p> --}}
                                {{-- idtransaksi_idevent_idpackage_random-iduser --}}
								<div class="flex items-center ml-5 pl-5 py-5 text-sm">
									<div class="flex flex-col">
										<span class="">Status Pembayaran</span>
										<div class="font-semibold text-center">Ajimon</div>
	
									</div>
									<div class="flex flex-col mx-auto">
										<span class="">Jumlah Pembayaran</span>
										<div class="font-semibold text-red-500 text-center">Economic</div>
	
									</div>

								</div>
								{{-- <div class="border-b border-dashed border-b-2 my-5"></div> --}}
								{{-- <div class="border-b border-dashed border-b-2 my-5"></div> --}}
								{{-- <div class="flex justify-center space-x-2">
									<img src="https://pemudahijrah.id/wp-content/uploads/2023/03/cropped-cropped-Asset-6@4x-100x66.png" class="w-10 p-1">
								</div> --}}
								<div class="flex justify-center space-x-2">
									<img src="https://pemudahijrah.id/wp-content/uploads/2023/03/cropped-cropped-Asset-6@4x-100x66.png" class="w-10 p-1">
									<img src="https://pemudahijrah.id/wp-content/uploads/2023/01/logo-program-raheela2-360px.png" class="w-10 p-1">
									<img src="https://pemudahijrah.id/wp-content/uploads/2023/03/logo-program-20mind-360px.png" class="w-10 p-1">
									{{-- <img src="https://pemudahijrah.id/wp-content/uploads/2023/03/logo-program-20mind-360px.png" class="w-10 p-1"> --}}
									<img src="https://pemudahijrah.id/wp-content/uploads/2022/11/logo-program-sri-360px.png" class="w-10 p-1">
									<img src="https://pemudahijrah.id/wp-content/uploads/2022/11/logo-program-pesantrend-360px.png" class="w-10 p-1">
									<img src="https://pemudahijrah.id/wp-content/uploads/2022/11/logo-program-shiftcare-360px.png" class="w-10 p-1">
									<img src="https://pemudahijrah.id/wp-content/uploads/2022/11/logo-program-shiftmedia-360px.png" class="w-10 p-1">
									<img src="https://pemudahijrah.id/wp-content/uploads/2023/01/logo-program-shiftfarm-360px.png" class="w-10 p-1">
								</div>
								<div class="border-b border-dashed border-b-2 my-5"></div>
                                <a href="/" class=" block  text-white text-center font-semibold py-3 px-4 rounded" style="background-color: #6B4A1F;">
                                    Konfirmasi 
                                </a>
								<a href="#" class=" block  text-center font-semibold py-3 px-4 rounded my-2" style="background-color: #6b4a1f31; text-color: #6B4A1F">
                                    Tanya Admin
                                </a>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
