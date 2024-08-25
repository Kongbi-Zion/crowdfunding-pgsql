@extends('layouts.main')
@section('content')
<section class="bg-gray-50 w-full">
  <div class="items-center px-6 py-8 mx-auto min-h-[80vh] pt-20 w-full flex justify-center">
    <div class="mt-10 md:mt-20 md-5 md:mb-10">
      
      @if ($message = Session::get('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
          <span class="font-medium">{{ $message }}</span>
        </div>
      @endif

      @if(count($donations) != 0)      
      <div class='grid md:grid-cols-2 lg:grid-cols-3 w-full max-w-screen-xl gap-5'>
        @foreach ($donations as $donation)
          <div class="group relative w-full rounded-xl border border-stroke bg-white text-center">
            <div class='my-5 mx-10 sm:mx-20'>
              <div class="relative z-10 inline-flex items-center mx-auto mb-5 mt-5 h-11">
                <span class="bg-blue-500 absolute -right-3 top-0 z-[-1] h-[34px] w-[34px] rounded-full opacity-10"></span>
                <svg width="51" height="50" viewBox="0 0 51 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M48.1348 34.7656C47.1191 31.4062 43.7598 29.5312 40.5566 30.4687C37.9004 31.25 34.2285 32.3437 31.3379 33.2031C31.5723 32.2656 31.416 31.4844 31.1816 30.8594C30.4004 28.9844 28.3691 28.125 26.5723 28.125H18.6816C18.0566 28.125 17.3535 27.8125 16.6504 27.1875C15.791 26.4062 14.6191 25.9375 13.4473 25.9375H7.11914C4.30664 25.9375 1.96289 28.3594 1.96289 31.3281V41.4844C1.96289 44.5312 4.30664 46.9531 7.19727 46.9531H14.9316C15.8691 46.9531 16.8848 46.6406 17.7441 46.0938C20.0098 47.3438 22.5879 47.9688 25.166 47.9688C26.7285 47.9688 28.291 47.7344 29.6973 47.2656L43.916 42.9688H43.9941C48.291 41.3281 48.916 37.5781 48.1348 34.7656ZM7.19727 43.4375C6.25977 43.4375 5.47852 42.5781 5.47852 41.4844V31.3281C5.47852 30.3125 6.18164 29.4531 7.11914 29.4531H13.5254C13.916 29.4531 14.2285 29.6094 14.3848 29.7656C14.6191 30 14.8535 30.1562 15.0879 30.3125V43.3594C15.0098 43.3594 15.0098 43.3594 14.9316 43.3594H7.19727V43.4375ZM42.8223 39.6094L28.5254 43.9844C27.4316 44.2969 26.2598 44.5313 25.0098 44.5313C22.9785 44.5313 21.0254 43.9844 19.3066 43.0469L18.5254 42.6562V31.7187C18.6035 31.7187 18.6035 31.7187 18.6816 31.7187H26.6504C27.3535 31.7187 27.9004 32.0312 27.9785 32.2656C28.0566 32.5 27.9004 33.3594 26.2598 34.9219L25.2441 35.8594L25.9473 37.0313C26.6504 38.2813 27.3535 38.0469 30.0879 37.2656C31.3379 36.875 33.0566 36.4063 34.7754 35.9375C38.1348 34.9219 41.5723 33.9063 41.5723 33.9063C42.9004 33.5156 44.3066 34.375 44.7754 35.8594C45.166 37.1094 45.0879 38.75 42.8223 39.6094Z" fill="#3758F9"></path>
                  <path d="M47.4316 17.6563H45.4785V3.75C45.4785 2.8125 44.6973 1.95312 43.6816 1.95312C42.666 1.95312 41.9629 2.8125 41.9629 3.75V17.6563H37.666V6.09375C37.666 5.15625 36.8848 4.29688 35.8691 4.29688C34.8535 4.29688 34.1504 5.15625 34.1504 6.09375V17.6563H29.8535V10C29.8535 9.0625 29.0723 8.20313 28.0566 8.20313C27.041 8.20313 26.2598 8.98438 26.2598 10V17.6563H25.0879C24.1504 17.6563 23.291 18.4375 23.291 19.4531C23.291 20.4688 24.0723 21.25 25.0879 21.25H47.4316C48.3691 21.25 49.2285 20.4688 49.2285 19.4531C49.2285 18.4375 48.3691 17.6563 47.4316 17.6563Z" fill="#3758F9"></path>
                </svg>
              </div>
              <h4 class="text-dark  text-2xl mb-2 font-bold">
                {{ $donation->user->name }}
              </h4>
              <p class="text-body-color mb-5">
                {{ $donation->reason }}
              </p>
              <span class="bg-blue-500 absolute -bottom-2 left-0 right-0 z-[-1] mx-auto h-12 w-3/4 opacity-0 blur-[12px] transition group-hover:opacity-[14%]"></span>
              
              <form action="{{ route('donations.destroy',$donation->id) }}" method="POST">
                @csrf
                @method('DELETE')                           

                  @php
                      $authUser = Auth::user();
                  @endphp

                  @if($authUser && $authUser->id === $donation->userId)
                    <a href="{{ route('donations.edit',$donation->id) }}" type="button" class="text-white mb-4 bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Edit</a>
                    <button type="submit" class="text-white mb-4 bg-gradient-to-r from-red-500 via-red-600 to-red-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Delete</button>
                  @else
                    <a href="{{ route('payment.donate',$donation->id) }}" type="button" class="text-white mb-4 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Donate</a>                    
                  @endif            
            
                </form>
            </div>       
          </div>
        @endforeach
      </div>   
      @else
      <div class="p-4 text-sm text-gray-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300" role="alert">
        <span class="font-medium">Are you in need of donations? click <a href="{{ url('donations/create') }}" class="text-blue-600">Here</a> to add one. Or click on request donation at the nav bar.</span>
      </div>
      @endif
      
    </div>
  </div>
</section>

@endsection