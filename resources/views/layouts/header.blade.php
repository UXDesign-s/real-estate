{{-- Header Starts --}}
<div class="mainDiv">
    <div class="mainHeader">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-4">
               <a href="{{route('home')}}"> <img src="{{asset('images/mainLogo.jpeg')}}" alt=""></a>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-5">
                        <input _ngcontent-public-website-c55="" type="text" name="vehicleReg" maxlength="7"
                            autocomplete="off" autocorrect="off" aria-label="Vehicle lookup" required=""
                            class="vrm ng-untouched ng-pristine ng-invalid" id="header-mvtb-vrm-input"
                            placeholder="Registration">
                    </div>
                    <div class="col-md-4">
                        <input _ngcontent-public-website-c55="" type="text" name="vehicleReg" maxlength="7"
                            autocomplete="off" autocorrect="off" aria-label="Vehicle lookup" required=""
                            class="vrm ng-untouched ng-pristine ng-invalid" placeholder="Mileage">
                    </div>
                    <div class="col-md-3">
                        <button _ngcontent-public-website-c55="" id="btn-go" type="submit"
                            class="cta primary sub ng-star-inserted"><span _ngcontent-public-website-c55=""
                                class="ng-star-inserted"> GO <button-arrow _ngcontent-public-website-c55=""
                                    _nghost-public-website-c38=""><svg _ngcontent-public-website-c38="" width="12"
                                        height="12" viewBox="0 0 10 10" aria-hidden="true"
                                        class="button-arrow right ng-star-inserted">
                                        <g _ngcontent-public-website-c38="" fill-rule="evenodd">
                                            <path _ngcontent-public-website-c38="" d="M0 5h7" class="line"></path>
                                            <path _ngcontent-public-website-c38="" d="M1 1l4 4-4 4" class="arrow">
                                            </path>
                                        </g>
                                    </svg><!----><!----></button-arrow></span><!----><!----></button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="headToggler">
                    {{-- Tooggler here --}}
                    <div class="container">
                        <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                            aria-controls="sidebar">
                            <div class="menu-bars">
                                <div class="menu-bar-1">
                                </div>
                                <div class="menu-bar-2">
                                </div>
                                <div class="menu-bar-3">
                                </div>
                            </div>
                        </button>

                        <div class="offcanvas offcanvas-end" tabindex="-1" id="sidebar"
                            aria-labelledby="sidebarLabel">
                            <div class="offcanvas-header">
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="list-group">
                                    <li class="list-group-item"><a href="#">Car valuation</a></li>
                                    <li class="list-group-item"><a href="#">FAQs</a></li>
                                    <li class="list-group-item"><a href="#">Branch locator</a></li>
                                    <li class="list-group-item"><a href="#">Manage appointment</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- Toggleer Ends --}}
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Header Ends --}}
