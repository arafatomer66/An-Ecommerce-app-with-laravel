<div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            




                            <div class="panel panel-default">
                                
                                @foreach ( App\Models\Backend\Category::orderBy('name', 'asc')->where('parent_id' , 0)->get() as $parent )
                                
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#{{ $parent->slug }}">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                {{ $parent->name }}
                                            </a>
                                        </h4>
                                    </div>

                                    <div id="{{ $parent->slug }}" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                @foreach ( App\Models\Backend\Category::orderBy('name', 'asc')->where('parent_id' , $parent->id)->get() as $child )
                                                    <li>
                                                        <a href="{{ route('categories.show', $child->id) }}">{{ $child->name }}</a>
                                                    </li>
                                                @endforeach                                                   
                                            </ul>
                                        </div>
                                    </div>

                                @endforeach


                            </div>



                        </div><!--/category-products-->
                    
                        <div class="brands_products"><!--brands_products-->
                            <h2>Brands</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
                                    <li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                                    <li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
                                    <li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
                                    <li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
                                    <li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
                                    <li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                        
                        <div class="price-range"><!--price-range-->
                            <h2>Price Range</h2>
                            <div class="well text-center">
                                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div><!--/price-range-->
                        
                        <div class="shipping text-center"><!--shipping-->
                            <img src="{{ asset('frontend/images/home/shipping.jpg') }}" alt="" />
                        </div><!--/shipping-->
                    
                    </div>
                </div>