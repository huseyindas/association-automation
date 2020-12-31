@extends("layouts.master")

@section("content")
        <h2 class="intro-y text-lg font-medium mt-10">
            Üye Listesi
        </h2>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
                <button class="button text-white bg-theme-1 shadow-md mr-2">Yeni Üye Ekle</button>
                <button class="button text-white bg-theme-9 shadow-md mr-2">Üyelik İstekleri</button>
                <button class="button text-white bg-theme-11 shadow-md mr-2">Üyeleri İçe/Dışa Aktar</button>
                <div class="dropdown relative">
                    <button class="dropdown-toggle button px-2 box text-gray-700">
                        <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
                    </button>
                    <div class="dropdown-box mt-10 absolute w-40 top-0 left-0 z-20">
                        <div class="dropdown-box__content box p-2">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="users" class="w-4 h-4 mr-2"></i> Rol Ekle </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="message-circle" class="w-4 h-4 mr-2"></i> Mail Gönder </a>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block mx-auto text-gray-600"></div>
                <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                    <div class="w-56 relative text-gray-700">
                        <input type="text" class="input w-56 box pr-10 placeholder-theme-13" placeholder="Ara...">
                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                    </div>
                </div>
            </div>
            <!-- BEGIN: Users Layout -->
            @foreach($users as $user)
            <div class="intro-y col-span-12 md:col-span-6">
                <div class="box">
                    <div class="flex flex-col lg:flex-row items-center p-5">
                        <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/uploads/{{$user->photo}}">
                        </div>
                        <div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0">
                            <a href="" class="font-medium">{{$user->name}}</a>
                            <div class="text-gray-600 text-xs">{{$user->company_name}}</div>
                        </div>
                        <div class="flex mt-4 lg:mt-0">
                            <button class="button button--sm text-white bg-theme-1 mr-2">Mesaj</button>
                            <button class="button button--sm text-gray-700 border border-gray-300">Profil</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- BEGIN: Users Layout -->
            <!-- END: Pagination -->
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-no-wrap items-center">
                <div class="d-flex justify-content-center">
                    {{$users->links()}}
                </div>
            </div>
            <!-- END: Pagination -->
        </div>
    </div>

@endsection
