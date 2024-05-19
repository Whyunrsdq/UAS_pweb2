<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
    tailwind.config = {
      theme: {
        container: {
          center : true,
          padding: '14px',
        },
        extend: {
          colors: {
            primary:'#1d4ed8',
          },
          letterSpacing: {
          lebar: '.5em',
          }
        }
      }
    }
  </script>

    <title>Whyunrsdq | Portofolio</title>
</head>
<body class="bg-black text-white">
 
{{-- Header Start --}}

<nav class=" bg-black md:flex md:items-center md:justify-between w-full fixed">
  <div class="flex justify-between items-center">
    <a href="#home">
      <img class="w-48 inline" src="{{asset('img/logo.png')}}" alt="">
    </a>
    <span class=" inline text-5xl md:mb-50 cursor-pointer md:hidden mx-2">
      <ion-icon class="text-primary" name="menu" onclick="Menu(this)"></ion-icon>
    </span>
  </div>
  <ul class="md:flex md:items-center z-[1] md:top-100 md:z-auto md:static absolute bg-black w-full left-0 pb-5 md:w-auto md:py-0 py-0 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
    <li class="mx-4 my-6 md:my-0">
      <a href="#" class="text-2xl hover:text-primary">Home</a>
    </li>
    <li class="mx-4 my-6 md:my-0">
      <a href="#service" class="text-2xl hover:text-primary">Service</a>
    </li>
    <li class="mx-4 my-6 md:my-0">
      <a href="#portofolio" class="text-2xl hover:text-primary">Portofolio</a>
    </li>
    <li class="mx-4 my-6 md:my-0">
      <a href="#about" class="text-2xl hover:text-primary">About</a>
    </li>
    <button class="px-6 py-2 mx-4 bg-primary rounded-lg hover:bg-blue-900"><a href="#contact">Contact Me</a>
      
    </button>
  </ul>
</nav>

{{-- Header Start --}}

{{-- Hero Section Start --}}
<section id="home" class="pt-36 w-full pb-16">
    <div class="container">
        <div class="flex flex-wrap py-16">
            <div class="w-full self-center px-16 lg:w-1/2">
                <svg width="150" height="64" viewBox="0 0 150 64" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M75.5 64L59.4785 43H91.5215L75.5 64Z" fill="white"/>
<rect width="150" height="50" fill="white"/>
<path d="M35.4017 16.55V34H31.9017V26.575H24.4267V34H20.9267V16.55H24.4267V23.725H31.9017V16.55H35.4017ZM40.6216 18.5C40.0049 18.5 39.4882 18.3083 39.0716 17.925C38.6716 17.525 38.4716 17.0333 38.4716 16.45C38.4716 15.8667 38.6716 15.3833 39.0716 15C39.4882 14.6 40.0049 14.4 40.6216 14.4C41.2382 14.4 41.7466 14.6 42.1466 15C42.5632 15.3833 42.7716 15.8667 42.7716 16.45C42.7716 17.0333 42.5632 17.525 42.1466 17.925C41.7466 18.3083 41.2382 18.5 40.6216 18.5ZM42.3466 20.15V34H38.8466V20.15H42.3466ZM63.6366 16.55V19.375H58.9866V34H55.4866V19.375H50.8366V16.55H63.6366ZM73.9903 19.95C75.0403 19.95 75.9737 20.1833 76.7903 20.65C77.607 21.1 78.2403 21.775 78.6903 22.675C79.157 23.5583 79.3903 24.625 79.3903 25.875V34H75.8903V26.35C75.8903 25.25 75.6153 24.4083 75.0653 23.825C74.5153 23.225 73.7653 22.925 72.8153 22.925C71.8487 22.925 71.082 23.225 70.5153 23.825C69.9653 24.4083 69.6903 25.25 69.6903 26.35V34H66.1903V15.5H69.6903V21.875C70.1403 21.275 70.7403 20.8083 71.4903 20.475C72.2403 20.125 73.0737 19.95 73.9903 19.95ZM95.5937 26.775C95.5937 27.275 95.5603 27.725 95.4937 28.125H85.3687C85.452 29.125 85.802 29.9083 86.4187 30.475C87.0353 31.0417 87.7937 31.325 88.6937 31.325C89.9937 31.325 90.9187 30.7667 91.4687 29.65H95.2437C94.8437 30.9833 94.077 32.0833 92.9437 32.95C91.8103 33.8 90.4187 34.225 88.7687 34.225C87.4353 34.225 86.2353 33.9333 85.1687 33.35C84.1187 32.75 83.2937 31.9083 82.6937 30.825C82.1103 29.7417 81.8187 28.4917 81.8187 27.075C81.8187 25.6417 82.1103 24.3833 82.6937 23.3C83.277 22.2167 84.0937 21.3833 85.1437 20.8C86.1937 20.2167 87.402 19.925 88.7687 19.925C90.0853 19.925 91.2603 20.2083 92.2937 20.775C93.3437 21.3417 94.152 22.15 94.7187 23.2C95.302 24.2333 95.5937 25.425 95.5937 26.775ZM91.9687 25.775C91.952 24.875 91.627 24.1583 90.9937 23.625C90.3603 23.075 89.5853 22.8 88.6687 22.8C87.802 22.8 87.0687 23.0667 86.4687 23.6C85.8853 24.1167 85.527 24.8417 85.3937 25.775H91.9687ZM101.648 22.3C102.098 21.5667 102.682 20.9917 103.398 20.575C104.132 20.1583 104.965 19.95 105.898 19.95V23.625H104.973C103.873 23.625 103.04 23.8833 102.473 24.4C101.923 24.9167 101.648 25.8167 101.648 27.1V34H98.1483V20.15H101.648V22.3ZM121.131 26.775C121.131 27.275 121.097 27.725 121.031 28.125H110.906C110.989 29.125 111.339 29.9083 111.956 30.475C112.572 31.0417 113.331 31.325 114.231 31.325C115.531 31.325 116.456 30.7667 117.006 29.65H120.781C120.381 30.9833 119.614 32.0833 118.481 32.95C117.347 33.8 115.956 34.225 114.306 34.225C112.972 34.225 111.772 33.9333 110.706 33.35C109.656 32.75 108.831 31.9083 108.231 30.825C107.647 29.7417 107.356 28.4917 107.356 27.075C107.356 25.6417 107.647 24.3833 108.231 23.3C108.814 22.2167 109.631 21.3833 110.681 20.8C111.731 20.2167 112.939 19.925 114.306 19.925C115.622 19.925 116.797 20.2083 117.831 20.775C118.881 21.3417 119.689 22.15 120.256 23.2C120.839 24.2333 121.131 25.425 121.131 26.775ZM117.506 25.775C117.489 24.875 117.164 24.1583 116.531 23.625C115.897 23.075 115.122 22.8 114.206 22.8C113.339 22.8 112.606 23.0667 112.006 23.6C111.422 24.1167 111.064 24.8417 110.931 25.775H117.506ZM128.21 16.25L127.81 28.325H124.86L124.435 16.25H128.21ZM126.41 34.175C125.777 34.175 125.252 33.9833 124.835 33.6C124.435 33.2 124.235 32.7083 124.235 32.125C124.235 31.5417 124.435 31.0583 124.835 30.675C125.252 30.275 125.777 30.075 126.41 30.075C127.027 30.075 127.535 30.275 127.935 30.675C128.335 31.0583 128.535 31.5417 128.535 32.125C128.535 32.7083 128.335 33.2 127.935 33.6C127.535 33.9833 127.027 34.175 126.41 34.175Z" fill="#0F369F"/>
</svg>

                <h2 class="pt-2 text-5xl font-bold md:text-6xl lg:text-7xl">Hi, i'm</h2>
                <h1 class="text-5xl font-bold mt-2 mb-5 md:text-6xl lg:text-7xl">A <span class="text-primary">Web Designer</span></h1>
                <p class="text-justify font-light text-lg mb-7 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum libero quod molestias sequi totam qui beatae quis cum dolorem, voluptas dignissimos aliquid natus inventore eveniet tenetur doloremque neque consectetur animi!</p>
                <a href="#" class="text-base bg-primary py-3 px-8 rounded-lg hover:bg-blue-900">Download CV</a>
            </div>
            <div class="w-full self-end px-16 lg:w-1/2">
                <div class="mt-10 lg:mt-0">
                    <img class="rounded-3xl" src="{{asset('img/person.png')}}" class="rounded-3xl max-w-full mx-auto">
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Hero Section End --}}

{{-- Service Start --}}
    
<section id="service" class="w-full">
    <div class="text-center px-20 pt-32 pb-20">
      <h1 class="font-bold text-4xl">Ser<span class="text-primary">vice</span></h1>
    </div>
    <div class="sm:px-32 sm:pb-20 max-w-5xl mx-auto grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-8 px-16 md:px-10 lg:px-8">
      
      <div class="shadow-lg shadow-blue-500 border border-primary text-center p-8 rounded-3xl bg-transparent">
        <div class="flex justify-center">
          <div class=" justify-center">
        <img class="py-5 items-center " src="{{asset('img/webdesign.png')}}" alt="">
            </div>
      </div>
        <h3 class="text-3xl font-bold text-primary pb-5">Web Design</h3>
        <p class="text-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt deserunt unde architecto facilis molestias qui ad eligendi, reiciendis sequi ex vel numquam! Deleniti, porro. Labore maxime doloremque voluptates debitis culpa.</p>
      </div>
      <div class="shadow-lg shadow-blue-500 border border-primary text-center p-8 rounded-3xl bg-transparent">
        <div class="flex justify-center">
          <div class=" justify-center">
        <img class="py-5" src="{{asset('img/wpdeveloping.png')}}" alt="">
          </div>
      </div>
        <h3 class="text-3xl font-bold text-primary pb-5">WP Developing</h3>
        <p class="text-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt deserunt unde architecto facilis molestias qui ad eligendi, reiciendis sequi ex vel numquam! Deleniti, porro. Labore maxime doloremque voluptates debitis culpa.</p>
      </div>
      <div class="shadow-lg shadow-blue-500 border border-primary text-center p-8 rounded-3xl bg-transparent">
        <div class=" flex justify-center">
          <div class="justify-center">
        <img class="py-5 " src="{{asset('img/ux.png')}}" alt="">
          </div>
      </div>
        <h3 class="text-3xl font-bold text-primary pb-5">UI / UX</h3>
        <p class="text-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt deserunt unde architecto facilis molestias qui ad eligendi, reiciendis sequi ex vel numquam! Deleniti, porro. Labore maxime doloremque voluptates debitis culpa.</p>
      </div>
    </div>
</section>

{{-- Service End --}}

{{-- Portofolio Start --}}
<section id="portofolio" class="w-full">
<div class="text-center px-20 pt-32 pb-20">
      <h1 class="font-bold text-4xl">Recent <span class="text-primary">Project</span></h1>
    </div>
    <div class="mx-auto px-16">
    <div class="flex flex-wrap gap-10 mx-auto xl:w-[1000px] justify-center">
      <img class="w-96" src="{{asset('img/portofolio1.png')}}" alt="">
      <img class="w-96" src="{{asset('img/portofolio2.png')}}" alt="">
      <img class="w-96" src="{{asset('img/portofolio3.png')}}" alt="">
      <img class="w-96" src="{{asset('img/portofolio4.png')}}" alt="">
    </div>
    </div>
</section>
{{-- Portofolio End --}}

{{-- About Start --}}

<section id="about" class="lg:pb-20 pt-32 w-full">
    <div class="container justify-around">
        <div class="flex flex-wrap py-5">
          <div class="w-full lg:pl-60 self-end lg:w-1/2">
                <div class="">
                    <img width="250" height="250" src="{{asset('img/about.png')}}" class="max-w-full mx-auto">
                </div>
            </div>
            <div class="mb-10 lg:w-[575px] md:px-32 h-full self-center px-16 lg:px-0 lg:pr-36">
                
              <div class="justify-center flex lg:justify-start md:justify-center pt-10 lg:pt-0">
                <h2 class="pr-5 pb-3 mb-5 text-4xl text-white font-bold md:text-3xl lg:text-6xl border-b-4 ">About<span class="text-primary"> Me</span></h2>
              </div>
              {{-- @foreach ($abouts as $data) --}}
                <p class="font-normal text-lg mb-2 leading-relaxed border-b-2 text-justify pb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum libero quod molestias sequi totam qui beatae quis cum dolorem, voluptas dignissimos aliquid natus inventore eveniet tenetur doloremque neque consectetur animi!</p>
                {{-- <p class="font-normal text-lg mb-2 leading-relaxed border-b-2 text-justify pb-3">{{ $data->about }}</p>
              @endforeach --}}
                <div class="flex justify-between font-semibold p-0">
                  <p class="items-center flex pb-0"><img class="mr-2" width="25" height="25" src="{{asset('img/telephone.png')}}" alt="">08123456789</p>
                  <p class="items-center flex pb-0"><img class="mr-2" width="25" height="25" src="{{asset('img/github.png')}}" alt="">Whyunrsdq</p>
                </div>
                
            </div>
            
        </div>
    </div>
</section>

{{-- About End --}}

{{-- Footer Start --}}

<section id="contact" class="bg-black h-42 w-full">
  <div class="py-8 lg:py-10 px-20 mx-auto max-w-screen-md">
      <h2 class="mb-4 text-4xl tracking-tight font-bold text-center text-white">Contact <span class="text-primary">Me</span></h2>
      <form method='POST' class="space-y-8">
        @csrf
          <div>
              <label for="text" class="block mb-2 text-sm font-medium text-white">Nama</label>
              <input type="text" id="nama" name="nama" class="shadow-sm bg-gray-800 border border-gray-300 text-white text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Nama..." value="{{ (isset($bukutamu)) ? $bukutamu->nama:"" }}" required>
          </div>
          <div>
              <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
              <input type="email" id="email" name="email" class="block p-3 w-full text-sm text-white bg-gray-800 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Email..." value="{{ (isset($bukutamu)) ? $bukutamu->email:"" }}" required>
          </div>
          <div class="sm:col-span-2">
              <label for="pesan" class="block mb-2 text-sm font-medium text-white">Pesan</label>
              <textarea id="pesan" rows="4" name="pesan" class="block p-2.5 w-full text-sm text-white bg-gray-800 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Pesan....." value="{{ (isset($bukutamu)) ? $bukutamu->pesan:"" }}"></textarea>
          </div>
          <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-blue-800 sm:w-fit hover:bg-blue-900">Send message</button>
      </form>
  </div>
  <div class="bg-blue-950 pt-5">
    {{-- <h5 class="text-center font-normal text-4xl pb-2 pt-5">Social Media</h5> --}}
    <div class="flex justify-center gap-10 pt-5 pb-8">
    <a href="https://web.facebook.com/Why.Exf"><img width="30" height="30" src="{{asset('img/facebook.png')}}" alt=""></a>
    <a href="https://www.instagram.com/whynrsdq/"><img width="30" height="30" src="{{asset('img/instagram.png')}}" algt=""></a>
    <a href="https://github.com/Whyunrsdq/"><img width="30" height="30" src="{{asset('img/github.png')}}" algt=""></a>
    <a href="https://wa.me/62895360501188/"><img width="30" height="30" src="{{asset('img/whatsapp.png')}}" algt=""></a>
    </div>
  </div>
    <div class="bg-blue-800">
      <p class="text-center">Copyright ©2024 Designed By <span class="font-extralight">Wayy4321</span></p>
    </div>
</section>

{{-- Footer End --}}

<script>

const swal = $('.swal').data('swal');

        if(swal){
            Swal.fire({
                'title':'Success',
                'text' : swal,
                'icon': 'success',
                'showConfirmButton':false,
                'timer':2000
            })
        }

        function Menu(e) {
            let list = document.querySelector('ul');
            e.name === 'menu' ? (e.name = "close", list.classList.add('top-[87px]'), list.classList.add('opacity-100')) : (e.name = "menu", list.classList.remove('top-[87px]'), list.classList.remove('opacity-100'))
        }
    </script>
   @if($message = Session::get('success'))
    <script>
        Swal.fire({
            title: "Pesan Berhasil Terkirim",
            //text: "{{ Session::get('success') }}",
            // background: "#00C853"
            // color: "#FAFAFA",
            icon: "success"
        });
    </script>
@endif
</body>
</html>