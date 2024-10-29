<aside class="navbar-aside" id="offcanvas_aside">
    <div class="aside-top">
        <a href="{{ route('dashboard') }}" class="brand-wrap">
            @if ($config)
                {{-- <link rel="shortcut icon" href="" type="image/x-icon"> --}}
                <img src="{{ asset('files/config/' . $config->logo) }}" class="logo" alt="Evara Dashboard">
            @endif
        </a>
        <div>
            <button class="btn btn-icon btn-aside-minimize"> <i class="text-muted material-icons md-menu_open"></i>
            </button>
        </div>
    </div>
    <nav>
        <ul class="menu-aside">
            <li class="menu-item active">
                <a class="menu-link" href="{{ route('dashboard') }}">
                    <svg class="icon" width="22px" height="22px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.5"
                            d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                            fill="#1C274C" />
                        <path
                            d="M9 17.25C8.58579 17.25 8.25 17.5858 8.25 18C8.25 18.4142 8.58579 18.75 9 18.75H15C15.4142 18.75 15.75 18.4142 15.75 18C15.75 17.5858 15.4142 17.25 15 17.25H9Z"
                            fill="#1C274C" />
                    </svg>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('admin.order') }}">
                    <svg class="icon" width="22px" height="22px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M1.28869 2.76279C1.41968 2.36983 1.84442 2.15746 2.23737 2.28845L2.50229 2.37675C2.51549 2.38115 2.52864 2.38554 2.54176 2.38991C3.16813 2.59867 3.69746 2.7751 4.11369 2.96873C4.55613 3.17456 4.94002 3.42965 5.23112 3.83352C5.52221 4.2374 5.64282 4.68226 5.69817 5.16708C5.75025 5.62318 5.75023 6.18114 5.7502 6.84139L5.7502 9.49996C5.7502 10.9354 5.7518 11.9365 5.85335 12.6918C5.952 13.4256 6.13245 13.8142 6.40921 14.091C6.68598 14.3677 7.07455 14.5482 7.80832 14.6468C8.56367 14.7484 9.56479 14.75 11.0002 14.75H18.0002C18.4144 14.75 18.7502 15.0857 18.7502 15.5C18.7502 15.9142 18.4144 16.25 18.0002 16.25H10.9453C9.57774 16.25 8.47542 16.25 7.60845 16.1334C6.70834 16.0124 5.95047 15.7535 5.34855 15.1516C4.74664 14.5497 4.48774 13.7918 4.36673 12.8917C4.25017 12.0247 4.25018 10.9224 4.2502 9.55484L4.2502 6.883C4.2502 6.17 4.24907 5.69823 4.20785 5.33722C4.16883 4.99538 4.10068 4.83049 4.01426 4.71059C3.92784 4.59069 3.79296 4.47389 3.481 4.32877C3.15155 4.17551 2.70435 4.02524 2.02794 3.79978L1.76303 3.71147C1.37008 3.58049 1.15771 3.15575 1.28869 2.76279Z"
                            fill="#1C274C" />
                        <path opacity="0.5"
                            d="M5.74512 6C5.75008 6.25912 5.75008 6.53957 5.75007 6.8414L5.75006 9.5C5.75006 10.9354 5.75166 11.9365 5.85321 12.6919C5.86803 12.8021 5.8847 12.9046 5.90326 13H16.0221C16.9815 13 17.4612 13 17.8369 12.7523C18.2126 12.5045 18.4016 12.0636 18.7795 11.1818L19.2081 10.1818C20.0176 8.29294 20.4223 7.34853 19.9777 6.67426C19.5331 6 18.5056 6 16.4507 6H5.74512Z"
                            fill="#1C274C" />
                        <path
                            d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z"
                            fill="#1C274C" />
                        <path
                            d="M18 19.5001C18 18.6716 17.3284 18.0001 16.5 18.0001C15.6716 18.0001 15 18.6716 15 19.5001C15 20.3285 15.6716 21.0001 16.5 21.0001C17.3284 21.0001 18 20.3285 18 19.5001Z"
                            fill="#1C274C" />
                    </svg>
                    <span class="text">Order</span>
                </a>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="#">
                    <svg class="icon" width="22px" height="22px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.5"
                            d="M10.0234 2C9.05694 2 8.27344 2.7835 8.27344 3.75C8.27344 4.7165 9.05694 5.5 10.0234 5.5H14.0234C14.9899 5.5 15.7734 4.7165 15.7734 3.75C15.7734 2.7835 14.9899 2 14.0234 2H10.0234Z"
                            fill="#1C274C" />
                        <path opacity="0.5"
                            d="M3.88671 16.2052C3.02876 12.7734 2.59979 11.0575 3.50062 9.90376C4.40145 8.75 6.17016 8.75 9.70756 8.75H14.3382C17.8757 8.75 19.6444 8.75 20.5452 9.90376C21.446 11.0575 21.0171 12.7734 20.1591 16.2052C19.6134 18.3879 19.3406 19.4792 18.5268 20.1146C17.713 20.75 16.5881 20.75 14.3382 20.75H9.70756C7.45771 20.75 6.33278 20.75 5.519 20.1146C4.70521 19.4792 4.43238 18.3879 3.88671 16.2052Z"
                            fill="#1C274C" />
                        <path
                            d="M15.6039 4.5024C15.7126 4.2745 15.7734 4.0194 15.7734 3.75009C15.7734 3.48204 15.7132 3.22806 15.6055 3.00098C16.289 3.00595 16.8217 3.03732 17.2973 3.22318C17.8655 3.44525 18.3597 3.82275 18.7234 4.31251C19.0903 4.80659 19.2626 5.43988 19.4996 6.31153L19.546 6.4819L20.0587 9.44488C19.6501 9.16295 19.1231 8.99542 18.4414 8.89587L18.0801 6.80786C17.7964 5.76815 17.6934 5.44141 17.5191 5.20683C17.3233 4.94312 17.0572 4.73985 16.7512 4.62027C16.5314 4.53436 16.2658 4.50909 15.6039 4.5024Z"
                            fill="#1C274C" />
                        <path
                            d="M8.44142 3.00098C8.3337 3.22807 8.27344 3.48204 8.27344 3.75009C8.27344 4.0194 8.33427 4.2745 8.44294 4.5024C7.78109 4.50909 7.51551 4.53436 7.29571 4.62027C6.98976 4.73985 6.72365 4.94312 6.5278 5.20683C6.35359 5.44141 6.25059 5.76815 5.96681 6.80786L5.60551 8.89578C4.92397 8.99527 4.39697 9.16269 3.98828 9.44442L4.50092 6.4819L4.54731 6.31154C4.78439 5.43989 4.95663 4.80659 5.32356 4.31251C5.68728 3.82275 6.18149 3.44525 6.74968 3.22318C7.22521 3.03733 7.75793 3.00595 8.44142 3.00098Z"
                            fill="#1C274C" />
                    </svg>
                    <span class="text">Landing Page</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('attr') }}">Attributes</a>
                    {{-- <a href="{{ route('product.index') }}">Product List</a> --}}
                    <a href="{{ route('product.create') }}">Page Details</a>
                    <a href="{{ route('product.image') }}">Product Gallery</a>
                </div>
            </li>
            {{-- <li class="menu-item has-submenu">
                <a class="menu-link" href="#">
                    <svg width="22px" height="22px" class="icon" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.5116 10.0767C18.5116 10.8153 17.8869 11.4142 17.1163 11.4142C16.3457 11.4142 15.7209 10.8153 15.7209 10.0767C15.7209 9.33801 16.3457 8.7392 17.1163 8.7392C17.8869 8.7392 18.5116 9.33801 18.5116 10.0767Z"
                            fill="#1C274C" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M18.0363 5.53205C16.9766 5.39548 15.6225 5.39549 13.9129 5.39551H10.0871C8.37751 5.39549 7.02343 5.39548 5.9637 5.53205C4.87308 5.6726 3.99033 5.96873 3.29418 6.63601C2.59803 7.30329 2.28908 8.14942 2.14245 9.19481C1.99997 10.2106 1.99999 11.5085 2 13.1472V13.2478C1.99999 14.8864 1.99997 16.1843 2.14245 17.2001C2.28908 18.2455 2.59803 19.0916 3.29418 19.7589C3.99033 20.4262 4.87307 20.7223 5.9637 20.8629C7.02344 20.9994 8.37751 20.9994 10.0871 20.9994H13.9129C15.6225 20.9994 16.9766 20.9994 18.0363 20.8629C19.1269 20.7223 20.0097 20.4262 20.7058 19.7589C21.402 19.0916 21.7109 18.2455 21.8575 17.2001C22 16.1843 22 14.8864 22 13.2478V13.1472C22 11.5085 22 10.2106 21.8575 9.19481C21.7109 8.14942 21.402 7.30329 20.7058 6.63601C20.0097 5.96873 19.1269 5.6726 18.0363 5.53205ZM6.14963 6.8576C5.21373 6.97821 4.67452 7.2044 4.28084 7.58175C3.88716 7.95911 3.65119 8.47595 3.52536 9.37303C3.42443 10.0926 3.40184 10.9919 3.3968 12.1682L3.86764 11.7733C4.99175 10.8305 6.68596 10.8846 7.74215 11.897L11.7326 15.7219C12.1321 16.1049 12.7611 16.1571 13.2234 15.8457L13.5008 15.6589C14.8313 14.7626 16.6314 14.8664 17.8402 15.9092L20.2479 17.9862C20.3463 17.7222 20.4206 17.4071 20.4746 17.0219C20.6032 16.1056 20.6047 14.8977 20.6047 13.1975C20.6047 11.4972 20.6032 10.2893 20.4746 9.37303C20.3488 8.47595 20.1128 7.95911 19.7192 7.58175C19.3255 7.2044 18.7863 6.97821 17.8504 6.8576C16.8944 6.73441 15.6343 6.73298 13.8605 6.73298H10.1395C8.36575 6.73298 7.10559 6.73441 6.14963 6.8576Z"
                            fill="#1C274C" />
                        <g opacity="0.5">
                            <path
                                d="M17.0866 2.61039C16.2268 2.49997 15.1321 2.49998 13.7675 2.5H10.6778C9.31314 2.49998 8.21844 2.49997 7.35863 2.61039C6.46826 2.72473 5.72591 2.96835 5.13712 3.53075C4.79755 3.8551 4.56886 4.22833 4.41309 4.64928C4.91729 4.41928 5.48734 4.28374 6.12735 4.20084C7.21173 4.06037 8.5973 4.06038 10.3466 4.06039H14.2615C16.0108 4.06038 17.3963 4.06037 18.4807 4.20084C19.0397 4.27325 19.5453 4.38581 20.0003 4.56638C19.8457 4.17917 19.6253 3.83365 19.3081 3.53075C18.7193 2.96835 17.977 2.72473 17.0866 2.61039Z"
                                fill="#1C274C" />
                        </g>
                    </svg>
                    <span class="text">Banner</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('banner.index') }}">Banner List</a>
                    <a href="{{ route('banner.create') }}">Create Banner</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="#">
                    <svg width="22px" height="22px" class="icon" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M10.75 2H12.75C15.5784 2 16.9926 2 17.8713 2.87868C18.75 3.75736 18.75 5.17157 18.75 8V16C18.75 18.8284 18.75 20.2426 17.8713 21.1213C16.9926 22 15.5784 22 12.75 22H10.75C7.92157 22 6.50736 22 5.62868 21.1213C4.75 20.2426 4.75 18.8284 4.75 16V8C4.75 5.17157 4.75 3.75736 5.62868 2.87868C6.50736 2 7.92157 2 10.75 2ZM8 13C8 12.5858 8.33579 12.25 8.75 12.25H14.75C15.1642 12.25 15.5 12.5858 15.5 13C15.5 13.4142 15.1642 13.75 14.75 13.75H8.75C8.33579 13.75 8 13.4142 8 13ZM8 9C8 8.58579 8.33579 8.25 8.75 8.25H14.75C15.1642 8.25 15.5 8.58579 15.5 9C15.5 9.41421 15.1642 9.75 14.75 9.75H8.75C8.33579 9.75 8 9.41421 8 9ZM8 17C8 16.5858 8.33579 16.25 8.75 16.25H11.75C12.1642 16.25 12.5 16.5858 12.5 17C12.5 17.4142 12.1642 17.75 11.75 17.75H8.75C8.33579 17.75 8 17.4142 8 17Z"
                            fill="#1C274C" />
                        <g opacity="0.5">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M1.75 4.25C2.16421 4.25 2.5 4.58579 2.5 5V19C2.5 19.4142 2.16421 19.75 1.75 19.75C1.33579 19.75 1 19.4142 1 19V5C1 4.58579 1.33579 4.25 1.75 4.25Z"
                                fill="#1C274C" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M21.75 4.25C22.1642 4.25 22.5 4.58579 22.5 5V19C22.5 19.4142 22.1642 19.75 21.75 19.75C21.3358 19.75 21 19.4142 21 19V5C21 4.58579 21.3358 4.25 21.75 4.25Z"
                                fill="#1C274C" />
                        </g>
                    </svg>
                    <span class="text">Category</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('category.index') }}">Category List</a>
                    <a href="{{ route('category.create') }}">Create Category</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="#">
                    <svg width="22px" height="22px" class="icon" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.5"
                            d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z"
                            fill="#1C274C" />
                        <path
                            d="M17.5762 10.4802C17.8414 10.1619 17.7984 9.68903 17.4802 9.42385C17.1619 9.15868 16.689 9.20167 16.4239 9.51988L14.627 11.6761C14.2562 12.1211 14.0285 12.3915 13.8409 12.5609C13.7539 12.6395 13.7023 12.6708 13.6776 12.6827C13.6725 12.6852 13.6689 12.6866 13.6667 12.6875C13.6667 12.6875 13.6624 12.6858 13.659 12.6843L13.6558 12.6827C13.6311 12.6708 13.5795 12.6395 13.4925 12.5609C13.3049 12.3915 13.0772 12.1211 12.7064 11.6761L12.414 11.3253C12.0855 10.931 11.7894 10.5756 11.5128 10.3259C11.2119 10.0541 10.8328 9.81207 10.3334 9.81207C9.83386 9.81207 9.4548 10.0541 9.15386 10.3259C8.87727 10.5756 8.58115 10.931 8.25269 11.3253L6.42385 13.5199C6.15868 13.8381 6.20167 14.311 6.51988 14.5762C6.83809 14.8414 7.31101 14.7984 7.57619 14.4802L9.37308 12.3239C9.74387 11.8789 9.97157 11.6085 10.1592 11.4391C10.2461 11.3606 10.2978 11.3293 10.3225 11.3173L10.3292 11.3142L10.3334 11.3126C10.3356 11.3134 10.3392 11.3149 10.3442 11.3173C10.369 11.3293 10.4206 11.3606 10.5076 11.4391C10.6951 11.6085 10.9228 11.8789 11.2936 12.3239L11.586 12.6748L11.586 12.6748C11.9145 13.069 12.2106 13.4244 12.4872 13.6742C12.7881 13.9459 13.1672 14.188 13.6667 14.188C14.1662 14.188 14.5452 13.9459 14.8462 13.6742C15.1228 13.4244 15.4189 13.069 15.7473 12.6748L17.5762 10.4802Z"
                            fill="#1C274C" />
                        <path
                            d="M22 5C22 6.65685 20.6569 8 19 8C17.3431 8 16 6.65685 16 5C16 3.34315 17.3431 2 19 2C20.6569 2 22 3.34315 22 5Z"
                            fill="#1C274C" />
                    </svg>
                    <span class="text">Campaign</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('campaign.index') }}">Campaign List</a>
                    <a href="{{ route('campaign.create') }}">Create Campaign</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="#">
                    <svg width="22px" height="22px" class="icon" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.5"
                            d="M21 15.9983V9.99826C21 7.16983 21 5.75562 20.1213 4.87694C19.3529 4.10856 18.175 4.01211 16 4H8C5.82497 4.01211 4.64706 4.10856 3.87868 4.87694C3 5.75562 3 7.16983 3 9.99826V15.9983C3 18.8267 3 20.2409 3.87868 21.1196C4.75736 21.9983 6.17157 21.9983 9 21.9983H15C17.8284 21.9983 19.2426 21.9983 20.1213 21.1196C21 20.2409 21 18.8267 21 15.9983Z"
                            fill="#1C274C" />
                        <path
                            d="M8 3.5C8 2.67157 8.67157 2 9.5 2H14.5C15.3284 2 16 2.67157 16 3.5V4.5C16 5.32843 15.3284 6 14.5 6H9.5C8.67157 6 8 5.32843 8 4.5V3.5Z"
                            fill="#1C274C" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12 9.25C12.4142 9.25 12.75 9.58579 12.75 10V12.25L15 12.25C15.4142 12.25 15.75 12.5858 15.75 13C15.75 13.4142 15.4142 13.75 15 13.75L12.75 13.75L12.75 16C12.75 16.4142 12.4142 16.75 12 16.75C11.5858 16.75 11.25 16.4142 11.25 16L11.25 13.75H9C8.58579 13.75 8.25 13.4142 8.25 13C8.25 12.5858 8.58579 12.25 9 12.25L11.25 12.25L11.25 10C11.25 9.58579 11.5858 9.25 12 9.25Z"
                            fill="#1C274C" />
                    </svg>
                    <span class="text">Service</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('variation.index') }}">Service List</a>
                    <a href="{{ route('variation.create') }}">Create Service</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="#">
                    <svg class="icon" width="22px" height="22px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd"
                            d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                            fill="#1C274C" />
                        <path
                            d="M12.75 6C12.75 5.58579 12.4142 5.25 12 5.25C11.5858 5.25 11.25 5.58579 11.25 6V6.31673C9.61957 6.60867 8.25 7.83361 8.25 9.5C8.25 11.4172 10.0628 12.75 12 12.75C13.3765 12.75 14.25 13.6557 14.25 14.5C14.25 15.3443 13.3765 16.25 12 16.25C10.6235 16.25 9.75 15.3443 9.75 14.5C9.75 14.0858 9.41421 13.75 9 13.75C8.58579 13.75 8.25 14.0858 8.25 14.5C8.25 16.1664 9.61957 17.3913 11.25 17.6833V18C11.25 18.4142 11.5858 18.75 12 18.75C12.4142 18.75 12.75 18.4142 12.75 18V17.6833C14.3804 17.3913 15.75 16.1664 15.75 14.5C15.75 12.5828 13.9372 11.25 12 11.25C10.6235 11.25 9.75 10.3443 9.75 9.5C9.75 8.65573 10.6235 7.75 12 7.75C13.3765 7.75 14.25 8.65573 14.25 9.5C14.25 9.91421 14.5858 10.25 15 10.25C15.4142 10.25 15.75 9.91421 15.75 9.5C15.75 7.83361 14.3804 6.60867 12.75 6.31673V6Z"
                            fill="#1C274C" />
                    </svg>
                    <span class="text">Coupon</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('coupon.index') }}">Coupon List</a>
                    <a href="{{ route('coupon.create') }}">Add coupon</a>
                </div>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('shipping.index') }}">
                    <svg width="22px" height="22px" class="icon" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.9999 4C15.9999 5.10457 15.1045 6 13.9999 6C12.8953 6 11.9999 5.10457 11.9999 4C11.9999 2.89543 12.8953 2 13.9999 2C15.1045 2 15.9999 2.89543 15.9999 4Z"
                            fill="#1C274C" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M10.9189 8.50596C10.0124 7.78435 8.67576 8.04212 8.10263 9.04908C7.54784 10.0238 7.96027 11.2644 8.98823 11.713L12.0789 13.0616C13.4091 13.6421 14.0213 15.1873 13.4496 16.5213L12.6893 18.2954C12.5261 18.6762 12.0852 18.8525 11.7045 18.6894C11.3237 18.5262 11.1474 18.0853 11.3105 17.7046L12.0709 15.9304C12.3178 15.3544 12.0534 14.6871 11.479 14.4364L8.38831 13.0878C6.54352 12.2828 5.80336 10.0564 6.799 8.30709C7.82756 6.49997 10.2263 6.03738 11.8531 7.3324L14.0114 9.05057C14.1736 9.1797 14.3748 9.25 14.5822 9.25H18.4999C18.9141 9.25 19.2499 9.58579 19.2499 10C19.2499 10.4142 18.9141 10.75 18.4999 10.75H14.5822C14.0355 10.75 13.5049 10.5646 13.0772 10.2241L10.9189 8.50596Z"
                            fill="#1C274C" />
                        <g opacity="0.5">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M18 14.25C15.9289 14.25 14.25 15.9289 14.25 18C14.25 20.0711 15.9289 21.75 18 21.75C20.0711 21.75 21.75 20.0711 21.75 18C21.75 15.9289 20.0711 14.25 18 14.25ZM18 15.75C16.7574 15.75 15.75 16.7574 15.75 18C15.75 19.2426 16.7574 20.25 18 20.25C19.2426 20.25 20.25 19.2426 20.25 18C20.25 16.7574 19.2426 15.75 18 15.75Z"
                                fill="#1C274C" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6 14.25C3.92893 14.25 2.25 15.9289 2.25 18C2.25 20.0711 3.92893 21.75 6 21.75C8.07107 21.75 9.75 20.0711 9.75 18C9.75 15.9289 8.07107 14.25 6 14.25ZM6 15.75C4.75736 15.75 3.75 16.7574 3.75 18C3.75 19.2426 4.75736 20.25 6 20.25C7.24264 20.25 8.25 19.2426 8.25 18C8.25 16.7574 7.24264 15.75 6 15.75Z"
                                fill="#1C274C" />
                        </g>
                    </svg>
                    <span class="text">Shipping</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('employee.index') }}">
                    <svg width="22px" height="22px" class="icon" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.5 7.5C15.5 9.433 13.933 11 12 11C10.067 11 8.5 9.433 8.5 7.5C8.5 5.567 10.067 4 12 4C13.933 4 15.5 5.567 15.5 7.5Z"
                            fill="#1C274C" />
                        <path opacity="0.4"
                            d="M19.5 7.5C19.5 8.88071 18.3807 10 17 10C15.6193 10 14.5 8.88071 14.5 7.5C14.5 6.11929 15.6193 5 17 5C18.3807 5 19.5 6.11929 19.5 7.5Z"
                            fill="#1C274C" />
                        <path opacity="0.4"
                            d="M4.5 7.5C4.5 8.88071 5.61929 10 7 10C8.38071 10 9.5 8.88071 9.5 7.5C9.5 6.11929 8.38071 5 7 5C5.61929 5 4.5 6.11929 4.5 7.5Z"
                            fill="#1C274C" />
                        <path
                            d="M18 16.5C18 18.433 15.3137 20 12 20C8.68629 20 6 18.433 6 16.5C6 14.567 8.68629 13 12 13C15.3137 13 18 14.567 18 16.5Z"
                            fill="#1C274C" />
                        <path opacity="0.4"
                            d="M22 16.5C22 17.8807 20.2091 19 18 19C15.7909 19 14 17.8807 14 16.5C14 15.1193 15.7909 14 18 14C20.2091 14 22 15.1193 22 16.5Z"
                            fill="#1C274C" />
                        <path opacity="0.4"
                            d="M2 16.5C2 17.8807 3.79086 19 6 19C8.20914 19 10 17.8807 10 16.5C10 15.1193 8.20914 14 6 14C3.79086 14 2 15.1193 2 16.5Z"
                            fill="#1C274C" />
                    </svg>
                    <span class="text">Employee</span>
                </a>
            </li> --}}
            @if (Auth::guard('admin')->user()->role == 'superAdmin')
            <li class="menu-item">
                <a class="menu-link" href="{{ route('config.index') }}">
                    <svg width="22px" height="22px" class="icon" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd"
                        d="M14.2788 2.15224C13.9085 2 13.439 2 12.5 2C11.561 2 11.0915 2 10.7212 2.15224C10.2274 2.35523 9.83509 2.74458 9.63056 3.23463C9.53719 3.45834 9.50065 3.7185 9.48635 4.09799C9.46534 4.65568 9.17716 5.17189 8.69017 5.45093C8.20318 5.72996 7.60864 5.71954 7.11149 5.45876C6.77318 5.2813 6.52789 5.18262 6.28599 5.15102C5.75609 5.08178 5.22018 5.22429 4.79616 5.5472C4.47814 5.78938 4.24339 6.1929 3.7739 6.99993C3.30441 7.80697 3.06967 8.21048 3.01735 8.60491C2.94758 9.1308 3.09118 9.66266 3.41655 10.0835C3.56506 10.2756 3.77377 10.437 4.0977 10.639C4.57391 10.936 4.88032 11.4419 4.88029 12C4.88026 12.5581 4.57386 13.0639 4.0977 13.3608C3.77372 13.5629 3.56497 13.7244 3.41645 13.9165C3.09108 14.3373 2.94749 14.8691 3.01725 15.395C3.06957 15.7894 3.30432 16.193 3.7738 17C4.24329 17.807 4.47804 18.2106 4.79606 18.4527C5.22008 18.7756 5.75599 18.9181 6.28589 18.8489C6.52778 18.8173 6.77305 18.7186 7.11133 18.5412C7.60852 18.2804 8.2031 18.27 8.69012 18.549C9.17714 18.8281 9.46533 19.3443 9.48635 19.9021C9.50065 20.2815 9.53719 20.5417 9.63056 20.7654C9.83509 21.2554 10.2274 21.6448 10.7212 21.8478C11.0915 22 11.561 22 12.5 22C13.439 22 13.9085 22 14.2788 21.8478C14.7726 21.6448 15.1649 21.2554 15.3694 20.7654C15.4628 20.5417 15.4994 20.2815 15.5137 19.902C15.5347 19.3443 15.8228 18.8281 16.3098 18.549C16.7968 18.2699 17.3914 18.2804 17.8886 18.5412C18.2269 18.7186 18.4721 18.8172 18.714 18.8488C19.2439 18.9181 19.7798 18.7756 20.2038 18.4527C20.5219 18.2105 20.7566 17.807 21.2261 16.9999C21.6956 16.1929 21.9303 15.7894 21.9827 15.395C22.0524 14.8691 21.9088 14.3372 21.5835 13.9164C21.4349 13.7243 21.2262 13.5628 20.9022 13.3608C20.4261 13.0639 20.1197 12.558 20.1197 11.9999C20.1197 11.4418 20.4261 10.9361 20.9022 10.6392C21.2263 10.4371 21.435 10.2757 21.5836 10.0835C21.9089 9.66273 22.0525 9.13087 21.9828 8.60497C21.9304 8.21055 21.6957 7.80703 21.2262 7C20.7567 6.19297 20.522 5.78945 20.2039 5.54727C19.7799 5.22436 19.244 5.08185 18.7141 5.15109C18.4722 5.18269 18.2269 5.28136 17.8887 5.4588C17.3915 5.71959 16.7969 5.73002 16.3099 5.45096C15.8229 5.17191 15.5347 4.65566 15.5136 4.09794C15.4993 3.71848 15.4628 3.45833 15.3694 3.23463C15.1649 2.74458 14.7726 2.35523 14.2788 2.15224Z"
                        fill="#1C274C" />
                    <path
                        d="M15.5227 12C15.5227 13.6569 14.1694 15 12.4999 15C10.8304 15 9.47705 13.6569 9.47705 12C9.47705 10.3431 10.8304 9 12.4999 9C14.1694 9 15.5227 10.3431 15.5227 12Z"
                        fill="#1C274C" />
                </svg>
                    <span class="text">Setting</span>
                </a>
            </li>
                {{-- <li class="menu-item has-submenu">
                    <a class="menu-link" href="#">
                        <svg width="22px" height="22px" class="icon" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.2788 2.15224C13.9085 2 13.439 2 12.5 2C11.561 2 11.0915 2 10.7212 2.15224C10.2274 2.35523 9.83509 2.74458 9.63056 3.23463C9.53719 3.45834 9.50065 3.7185 9.48635 4.09799C9.46534 4.65568 9.17716 5.17189 8.69017 5.45093C8.20318 5.72996 7.60864 5.71954 7.11149 5.45876C6.77318 5.2813 6.52789 5.18262 6.28599 5.15102C5.75609 5.08178 5.22018 5.22429 4.79616 5.5472C4.47814 5.78938 4.24339 6.1929 3.7739 6.99993C3.30441 7.80697 3.06967 8.21048 3.01735 8.60491C2.94758 9.1308 3.09118 9.66266 3.41655 10.0835C3.56506 10.2756 3.77377 10.437 4.0977 10.639C4.57391 10.936 4.88032 11.4419 4.88029 12C4.88026 12.5581 4.57386 13.0639 4.0977 13.3608C3.77372 13.5629 3.56497 13.7244 3.41645 13.9165C3.09108 14.3373 2.94749 14.8691 3.01725 15.395C3.06957 15.7894 3.30432 16.193 3.7738 17C4.24329 17.807 4.47804 18.2106 4.79606 18.4527C5.22008 18.7756 5.75599 18.9181 6.28589 18.8489C6.52778 18.8173 6.77305 18.7186 7.11133 18.5412C7.60852 18.2804 8.2031 18.27 8.69012 18.549C9.17714 18.8281 9.46533 19.3443 9.48635 19.9021C9.50065 20.2815 9.53719 20.5417 9.63056 20.7654C9.83509 21.2554 10.2274 21.6448 10.7212 21.8478C11.0915 22 11.561 22 12.5 22C13.439 22 13.9085 22 14.2788 21.8478C14.7726 21.6448 15.1649 21.2554 15.3694 20.7654C15.4628 20.5417 15.4994 20.2815 15.5137 19.902C15.5347 19.3443 15.8228 18.8281 16.3098 18.549C16.7968 18.2699 17.3914 18.2804 17.8886 18.5412C18.2269 18.7186 18.4721 18.8172 18.714 18.8488C19.2439 18.9181 19.7798 18.7756 20.2038 18.4527C20.5219 18.2105 20.7566 17.807 21.2261 16.9999C21.6956 16.1929 21.9303 15.7894 21.9827 15.395C22.0524 14.8691 21.9088 14.3372 21.5835 13.9164C21.4349 13.7243 21.2262 13.5628 20.9022 13.3608C20.4261 13.0639 20.1197 12.558 20.1197 11.9999C20.1197 11.4418 20.4261 10.9361 20.9022 10.6392C21.2263 10.4371 21.435 10.2757 21.5836 10.0835C21.9089 9.66273 22.0525 9.13087 21.9828 8.60497C21.9304 8.21055 21.6957 7.80703 21.2262 7C20.7567 6.19297 20.522 5.78945 20.2039 5.54727C19.7799 5.22436 19.244 5.08185 18.7141 5.15109C18.4722 5.18269 18.2269 5.28136 17.8887 5.4588C17.3915 5.71959 16.7969 5.73002 16.3099 5.45096C15.8229 5.17191 15.5347 4.65566 15.5136 4.09794C15.4993 3.71848 15.4628 3.45833 15.3694 3.23463C15.1649 2.74458 14.7726 2.35523 14.2788 2.15224Z"
                                fill="#1C274C" />
                            <path
                                d="M15.5227 12C15.5227 13.6569 14.1694 15 12.4999 15C10.8304 15 9.47705 13.6569 9.47705 12C9.47705 10.3431 10.8304 9 12.4999 9C14.1694 9 15.5227 10.3431 15.5227 12Z"
                                fill="#1C274C" />
                        </svg>
                        <span class="text">Settings</span>
                    </a>
                    <div class="submenu">
                        <a href="{{ route('config.index') }}">Site Setting</a>
                        <a href="{{ route('themes.index') }}">Themes</a>
                        <a href="{{ route('customlink.index') }}">Custom Code</a>
                    </div>
                </li> --}}
            @endif
        </ul>
        <br>
        <br>
    </nav>
</aside>
