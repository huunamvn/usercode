@extends('admins.layouts.master')

@section('css')
@endsection
@section('content')

<div class="wg-box">
    <div class="flex items-center justify-between gap10 flex-wrap">
        <div class="wg-filter flex-grow">
            <form class="form-search">
                <fieldset class="name">
                    <input type="text" placeholder="Search here..." class="" name="name" tabindex="2" value="" aria-required="true" required="">
                </fieldset>
                <div class="button-submit">
                    <button class="" type="submit"><i class="icon-search"></i></button>
                </div>
            </form>
        </div>
        <a class="tf-button style-1 w208" href="add-new-user.html"><i class="icon-plus"></i>Add new</a>
    </div>
    <div class="wg-table table-all-user">
        <ul class="table-title flex gap20 mb-14">
            <li>
                <div class="body-title">User</div>
            </li>    
            <li>
                <div class="body-title">Phone</div>
            </li>
            <li>
                <div class="body-title">Email</div>
            </li>
            <li>
                <div class="body-title">Action</div>
            </li>
        </ul>
        <ul class="flex flex-column">
            <li class="wg-product item-row">
                <div class="name flex-grow">
                    <div class="image">
                        <img src="images/products/product-1.jpg" alt="">
                    </div>
                    <div>
                        <div class="title">
                            <a href="#" class="body-title-2">V-neck linen T-shirt</a>
                        </div>
                        <div class="text-tiny">Product name</div>
                    </div>
                </div>
                <div class="body-text">(212) 555-1234</div>
                <div class="body-text">info@fashionshop.com</div>
                <div class="list-icon-function">
                    <div class="item eye">
                        <i class="icon-eye"></i>
                    </div>
                    <div class="item edit">
                        <i class="icon-edit-3"></i>
                    </div>
                    <div class="item trash">
                        <i class="icon-trash-2"></i>
                    </div>
                </div>
            </li>
            <li class="wg-product item-row">
                <div class="name flex-grow">
                    <div class="image">
                        <img src="images/products/product-2.jpg" alt="">
                    </div>
                    <div>
                        <div class="title">
                            <a href="#" class="body-title-2">Neptune Longsleeve</a>
                        </div>
                        <div class="text-tiny">Product name</div>
                    </div>
                </div>
                <div class="body-text">(212) 555-1234</div>
                <div class="body-text">info@fashionshop.com</div>
                <div class="list-icon-function">
                    <div class="item eye">
                        <i class="icon-eye"></i>
                    </div>
                    <div class="item edit">
                        <i class="icon-edit-3"></i>
                    </div>
                    <div class="item trash">
                        <i class="icon-trash-2"></i>
                    </div>
                </div>
            </li>
            <li class="wg-product item-row">
                <div class="name flex-grow">
                    <div class="image">
                        <img src="images/products/product-3.jpg" alt="">
                    </div>
                    <div>
                        <div class="title">
                            <a href="#" class="body-title-2">Ribbed Tank Top</a>
                        </div>
                        <div class="text-tiny">Product name</div>
                    </div>
                </div>
                <div class="body-text">(212) 555-1234</div>
                <div class="body-text">info@fashionshop.com</div>
                <div class="list-icon-function">
                    <div class="item eye">
                        <i class="icon-eye"></i>
                    </div>
                    <div class="item edit">
                        <i class="icon-edit-3"></i>
                    </div>
                    <div class="item trash">
                        <i class="icon-trash-2"></i>
                    </div>
                </div>
            </li>
            <li class="wg-product item-row">
                <div class="name flex-grow">
                    <div class="image">
                        <img src="images/products/product-4.jpg" alt="">
                    </div>
                    <div>
                        <div class="title">
                            <a href="#" class="body-title-2">Oversized Motif T-shirt</a>
                        </div>
                        <div class="text-tiny">Product name</div>
                    </div>
                </div>
                <div class="body-text">(212) 555-1234</div>
                <div class="body-text">info@fashionshop.com</div>
                <div class="list-icon-function">
                    <div class="item eye">
                        <i class="icon-eye"></i>
                    </div>
                    <div class="item edit">
                        <i class="icon-edit-3"></i>
                    </div>
                    <div class="item trash">
                        <i class="icon-trash-2"></i>
                    </div>
                </div>
            </li>
            <li class="wg-product item-row">
                <div class="name flex-grow">
                    <div class="image">
                        <img src="images/products/product-5.jpg" alt="">
                    </div>
                    <div>
                        <div class="title">
                            <a href="#" class="body-title-2">Jersey thong body</a>
                        </div>
                        <div class="text-tiny">Product name</div>
                    </div>
                </div>
                <div class="body-text">(212) 555-1234</div>
                <div class="body-text">info@fashionshop.com</div>
                <div class="list-icon-function">
                    <div class="item eye">
                        <i class="icon-eye"></i>
                    </div>
                    <div class="item edit">
                        <i class="icon-edit-3"></i>
                    </div>
                    <div class="item trash">
                        <i class="icon-trash-2"></i>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="divider"></div>
    <div class="flex items-center justify-between flex-wrap gap10">
        <div class="text-tiny">Showing 10 entries</div>
        <ul class="wg-pagination">
            <li>
                <a href="#"><i class="icon-chevron-left"></i></a>
            </li>
            <li>
                <a href="#">1</a>
            </li>
            <li class="active">
                <a href="#">2</a>
            </li>
            <li>
                <a href="#">3</a>
            </li>
            <li>
                <a href="#"><i class="icon-chevron-right"></i></a>
            </li>
        </ul>
    </div>
</div>

@endsection

@section('js')
@endsection

    