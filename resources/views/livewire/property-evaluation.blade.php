<div class="container">

    @if ($page_1_show)
        <!-- Your orders First page -->
        <div class="row justify-content-between yourOrder">
            <div class="col-md-3">
                <h3>Your Details</h3>
                <p>Step 1 of 2</p>
            </div>
            <div class="col-md-6">
                {{-- action="/check-property" method="get" --}}
                <form wire:submit.prevent="pageOne">
                    <div class="inputGroup">
                        <label>Email Addresss</label>
                        <input type="email" wire:model="email" placeholder="Email">
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="inputGroup">
                        <label>Phone Number</label>
                        <input type="tel" wire:model="phone_no" placeholder="Phone Number">
                        @error('phone_no')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <input type="submit" value="Submit">
                    @if ($steps > 1)
                        <i class="fas fa-arrow-right"wire:click="forward(2,1)"> Forward</i>
                    @endif

                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam placeat reiciendis cumque
                        accusantium
                        enim deleniti veritatis quo distinctio ad ipsam quia libero temporibus molestiae unde, quisquam
                        eos
                        dignissimos quaerat perspiciatis animi nostrum praesentium! Alias quos excepturi quisquam? Hic,
                        sit
                        suscipit sapiente harum quae facere vero, beatae nostrum voluptate, ratione cum blanditiis ad
                        magni
                        dicta ipsum fugit iusto nisi.</p>
                </form>
            </div>
            <div class="col-md-3">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed/v1/search?q=W14%209JH" width="200" height="200"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="address">
                    <p><strong>Address:</strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <button>Not my address</button>
            </div>
        </div>



        <!-- Firstpage ends -->
    @endif

    @if ($page_2_show)
        <div class="container">

            <!-- Your order second page -->
            <div class="row justify-content-between yourOrder">

                <div class="col-md-3">
                    <h3>Your Details</h3>
                    <p>Step 2 of 2</p>
                </div>
                <div class="col-md-6">
                    @if (session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    {{-- action="/your-evaluation" method="get" --}}
                    <form wire:submit.prevent="pageTwo">


                        <div class="inputGroup">
                            <select id="selectField" wire:model="property_type">
                                <option value="">Property Type</option>
                                <option value="detached_house"
                                    {{ $property_type == 'detached_house' ? 'selected' : '' }}>Detached House</option>
                                <option value="semi-detached_house"
                                    {{ $property_type == 'semi-detached_house' ? 'selected' : '' }}>Semi-Detached House
                                </option>
                                <option value="terraced_house"
                                    {{ $property_type == 'terraced_house' ? 'selected' : '' }}>Terrace House</option>
                                <option value="flat" {{ $property_type == 'flat' ? 'selected' : '' }}>Flat</option>
                            </select>
                        </div>
                        @error('property_type')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <div class="inputGroup">
                            <select id="selectField" wire:model="bedroom">
                                <option value="How many Bedrooms">How many Bedrooms</option>
                                <option value="1" {{ $bedroom == '1' ? 'selected' : '' }}>1</option>
                                <option value="2" {{ $bedroom == '2' ? 'selected' : '' }}>2</option>
                                <option value="3" {{ $bedroom == '3' ? 'selected' : '' }}>3</option>
                                <option value="4"{{ $bedroom == '4' ? 'selected' : '' }}>4</option>
                                <option value="5+" {{ $bedroom == '5+' ? 'selected' : '' }}>5+</option>
                            </select>
                        </div>
                        @error('bedroom')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <div class="inputGroup">
                            <select id="selectField" wire:model="rent_length">
                                <option value="Length of Rent">Length of Rent</option>
                                <option value="3">3 Years</option>
                                <option value="4">4 Years</option>
                                <option value="5">5 Years</option>
                            </select>
                        </div>
                        @error('rent_length')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <input type="submit" value="Submit">
                        @if ($steps >= 1)
                            <i class="fas fa-arrow-left"wire:click="back(1,2)"> Back</i>
                        @endif
                        @if ($steps > 2)
                            <i class="fas fa-arrow-right"wire:click="forward(3,2)"> Forward</i>
                        @endif
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam placeat reiciendis cumque
                            accusantium
                            enim deleniti veritatis quo distinctio ad ipsam quia libero temporibus molestiae unde,
                            quisquam
                            eos
                            dignissimos quaerat perspiciatis animi nostrum praesentium! Alias quos excepturi quisquam?
                            Hic,
                            sit
                            suscipit sapiente harum quae facere vero, beatae nostrum voluptate, ratione cum blanditiis
                            ad
                            magni
                            dicta ipsum fugit iusto nisi.</p>
                    </form>
                </div>
                <div class="col-md-3">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d54252756.833981484!2d99.33200472013144!3d33.90702147533245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1694233142703!5m2!1sen!2sin"
                            width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="address">
                        <p><strong>Address:</strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <button>Not my address</button>
                </div>
            </div>


            <!-- Second page ends -->
        </div>
    @endif


    @if ($page_3_show)
        <div class="container">


            <!-- FOURTH PAGE STARTS -->
            <div class="yourOrder row">
                <div class="col-md-3">
                    <h3>
                        Your Valuation
                    </h3>
                    <h2> ${{  isset($data['average']) ? number_format($data['average'], 2)  : number_format($data['average_price'], 2)  }}</h2>
                    <h4>
                        We can settle finance
                    </h4>
                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <form wire:submit.prevent="pageThree">
                        <p>Select branch and date</p>
                        <div class="inputgroup d-flex">
                            <input type="text" value="{{$meeting_branch}}" wire:model="meeting_branch" placeholder="Reading Whitly">
                            <button>2.9 miles away</button>
                        </div>
                        <div class="row align-items-center justify-content-start calenderChart">
                            <div class="col-md-2 text-center">
                                <a href="#">Wed <br>23Aug
                                <input type="radio" name="meeting_date"  value="23/08/2023" wire:model="meeting_date">
                                </a>
                            </div>
                            <div class="col-md-2 text-center">
                                <a href="#">Wed <br>23Aug</a>
                                <input type="radio" name="meeting_date"  value="23/08/2023"wire:model="meeting_date">
                            </div>
                            <div class="col-md-2 text-center">
                                <a href="#">Wed <br>23Aug</a>
                                <input type="radio" name="meeting_date"  value="24/08/2023"wire:model="meeting_date">
                            </div>
                            <div class="col-md-2 text-center">
                                <a href="#">Wed <br>23Aug</a>
                                <input type="radio" name="meeting_date"  value="25/08/2023"wire:model="meeting_date">
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-start calenderChart">
                            <div class="col-md-2 text-center">
                                <a href="#">Wed <br>23Aug</a>
                                <input type="radio" name="meeting_date"  value="26/08/2023"wire:model="meeting_date">
                            </div>
                            <div class="col-md-2 text-center">
                                <a href="#">Wed <br>23Aug</a>
                                <input type="radio" name="meeting_date"  value="27/08/2023"wire:model="meeting_date">
                            </div>
                            <div class="col-md-2 text-center">
                                <a href="#">Wed <br>23Aug</a>
                                <input type="radio" name="meeting_date"  value="28/08/2023"wire:model="meeting_date">
                            </div>
                            <input type="submit" value="Submit" class="continue">
                        </div>
                        @if ($steps >= 2)
                        <i class="fas fa-arrow-left"wire:click="back(2,3)"> Back</i>
                    @endif
                    @if ($steps > 3)
                        <i class="fas fa-arrow-right"wire:click="forward(4,3)"> Forward</i>
                    @endif
                    </form>
                </div>
                <div class="col-md-2">
                    <p><strong>Address:</strong>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque minima
                        eos
                        hic nihil optio adipisci dicta eaque a?</p>
                </div>
            </div>



            <!-- FOURTH PAGE ENDS -->
        </div>
    @endif



    @if ($page_4_show)
        <div class="container">
            <!-- FIFTH PAGE STARTS -->
            <div class="yourOrder row">
                <div class="col-md-3">
                    <h3>
                        Your Valuation
                    </h3>
                    <h2>${{  isset($data['average']) ? number_format($data['average'], 2)  : number_format($data['average_price'], 2)  }}</h2>
                    <h4>
                        We can settle finance
                    </h4>
                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <form wire:submit.prevent="pageFour>
                        <p>Select a time</p>
                        <div class="row align-items-center justify-content-start calenderChart">
                            <div class="col-md-2 text-center">
                                <a href="#">10:00</a>
                            </div>
                            <div class="col-md-2 text-center">
                                <a href="#">10:20</a>
                            </div>
                            <div class="col-md-2 text-center">
                                <a href="#">10:40</a>
                            </div>
                            <div class="col-md-2 text-center">
                                <a href="#">11:00</a>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-start calenderChart">
                            <div class="col-md-2 text-center">
                                <a href="#">11:20</a>
                            </div>
                            <div class="col-md-2 text-center">
                                <a href="#">11:40</a>
                            </div>
                            <div class="col-md-2 text-center">
                                <a href="#">12:00</a>
                            </div>
                            <div class="col-md-2 text-center">
                                <a href="#">12:20</a>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-start calenderChart">
                            <div class="col-md-2 text-center">
                                <a href="#">12:40</a>
                            </div>
                            <div class="col-md-2 text-center">
                                <a href="#">01:00</a>
                            </div>
                            <div class="col-md-2 text-center">
                                <a href="#">01:20</a>
                            </div>
                            <div class="col-md-2 text-center">
                                <a href="#">01:40</a>
                            </div>
                            <input type="submit" value="Submit" class="continue">
                        </div>

                        @if ($steps >= 3)
                            <i class="fas fa-arrow-left"wire:click="back(3,4)"> Back</i>
                        @endif
                        @if ($steps > 4)
                            <i class="fas fa-arrow-right"wire:click="foward(5,4)"> Foward</i>
                        @endif
                    </form>
                </div>
                <div class="col-md-2">
                    <p><strong>Address:</strong>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque minima
                        eos
                        hic
                        nihil optio adipisci dicta eaque a?</p>
                </div>
            </div>



            <!-- FIFTH PAGE ENDS -->

        </div>
    @endif

    @if ($page_5_show)
        <div class="container">


            <!-- Your order second page -->
            <div class="row justify-content-between yourOrder">

                <div class="col-md-3">
                    <h3>Confirm Your Appointment</h3>
                    <h6><span class="green">Appointmnet Summary</span></h6>
                    <ul>
                        <li><strong>Branch:</strong> Lorem Ipsum</li>
                        <li><strong>Date: </strong>1/12/23</li>
                        <li><strong>Time:</strong> 10:15</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <form action="{{ route('booked') }}" method="get">
                        <div class="inputGroup">
                            <label>Name</label>
                            <input type="textz" placeholder="Email">
                        </div>
                        <div class="inputGroup">
                            <label>Email Addresss</label>
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="inputGroup">
                            <label>Phone Number</label>
                            <input type="tel" placeholder="Phone Number">
                        </div>
                        <input type="submit" value="Submit">

                    </form>
                </div>
                <div class="col-md-3">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d54252756.833981484!2d99.33200472013144!3d33.90702147533245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1694233142703!5m2!1sen!2sin"
                            width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="address">
                        <p><strong>Address:</strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <button>Not my address</button>
                </div>
            </div>


            <!-- Second page ends -->
        </div>
    @endif



</div>
