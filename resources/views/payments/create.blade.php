@extends('layouts.main')
@section('content')
<div>
    <section class="bg-gray-50">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto h-[80vh] lg:py-0">
            <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                        Donate
                    </h1>
                    <div class='-mt-10'><p>Reason: {{$donation->reason}}</p></div>

                    @if ($errors->any())
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form class="space-y-4 md:space-y-6" action="{{ route('payment.create',$donation->id) }}" method="POST">
                    @csrf
                        <div>
                            <label for="reason" class="block mb-2 text-sm font-medium text-gray-900 ">Amount</label>
                            <input type="number" name="amount" value="{{$donation->reason}}" placeholder="Enter donation amount" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 " required>
                            <input name="donationId" value="{{$donation->id}}" hidden >
                        </div>
                        <button type="submit" class="w-full text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Donate</button>
                    </form>
                </div>
            </div>
        </div>
      </section>

    
</div>
@endsection





  