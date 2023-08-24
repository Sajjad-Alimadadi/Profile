<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>پنل مدیریت</title>
    <link rel="stylesheet" href="/admin/assets/css/fonts.css">
    <link rel="stylesheet" href="/admin/assets/css/boxicons.css">
    <link rel="stylesheet" href="/admin/assets/css/style.css">
    <script defer="" src="/admin/assets/js/feather.min.js"></script>
    <script defer="" src="/admin/assets/js/font-awesome.min.js"></script>
    <link rel="stylesheet" href="/admin/assets/css/easymde.min.css">

</head>
<body class="nav-fixed">
<nav class="is-rtl topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white" id="snavAccordion">
    <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle">
        <i class="bx bx-menu bx-sm"></i>
    </button>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="snav shadow-right snav-light">
            <div class="snav-menu">
                <div class="nav accordion" id="accordionSidenav">

                    <div class="snav-menu-heading">پنل مدیریت</div>
                    <a class="nav-link" href="/admin/dashboard">
                        <div class="nav-link-icon"><i class="bx bx-category-alt"></i></div>
                        صفحه اصلی
                    </a>
                    <a class="nav-link" href="/admin/cat">
                        <div class="nav-link-icon"><i class="bx bx-category-alt"></i></div>
                        دسته بندی
                    </a>
                    <a class="nav-link" href="/admin/blog">
                        <div class="nav-link-icon"><i class="bx bx-category-alt"></i></div>
                        پست ها
                    </a>
                    <a class="nav-link" href="/admin/signout">
                        <div class="nav-link-icon"><i class="bx bx-category-alt"></i></div>
                        خروج
                    </a>

                </div>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main class="is-rtl">
            <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                <div class="container-xl px-4">
                    <div class="page-header-content pt-4">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto mt-4">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i class="bx bx-pulse"></i></div>
                                    پست ها
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="container-xl px-4 mt-n10">
                <div class="row">
                    <div class="col-xxl-8">
                        <div class="card mb-4">
                            <div class="card-header border-bottom"></div>
                            <div class="card-body">

                                <div class="col-lg-12 mb-4">
                                    <!-- Billing card 1-->
                                    <div class="card h-100 border-start-lg border-start-primary">
                                        <div class="card-body">

                                            <form enctype="multipart/form-data" action="/admin/blog/create" method="post">
                                                @csrf
                                                <!-- Equivalent to... -->
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                                                <div class="row">
                                                    <div class="mb-3 col-sm-6">
                                                        <div class="mb-3">
                                                            <label class="small mb-1">دسته بندی</label>
                                                            <select class="form-select" name="cat_id">
                                                                <option selected="selected" style="display: none;">نوع دسته بندی را انتخاب نمایید</option>
                                                                @if ($result['cat'])
                                                                    @foreach($result['cat'] as $item)
                                                                        <option value="{{$item['id']}}">{{$item['name']}}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 col-sm-6">
                                                        <label class="small mb-1" for="subject">عنوان</label>
                                                        <input class="form-control" name="subject" type="input"
                                                               value="{{old('subject')}}"/>
                                                    </div>

                                                    <div class="mb-3 col-sm-12">
                                                        <label class="small mb-1" for="text">متن</label>
                                                        <textarea name="text" id="postEditor">{{old('text')}}</textarea>

                                                    </div>

                                                    <div class="mb-3 col-sm-6">
                                                        <label class="small mb-1" for="cover">کاور پست</label>
                                                        <input class="form-control" name="cover" type="file"/>
                                                    </div>

                                                    <div class="mt-4 mb-3 col-sm-6">
                                                        <input class="form-check-input" id="checkAutoGroup" name="is_protect" type="checkbox">
                                                        <label class="form-check-label" for="checkAutoGroup">محافظت از پـسـت با رمز عبور</label>
                                                    </div>

                                                </div>
                                                <button class="btn btn-primary" type="submit">ثبت اطلاعات</button>
                                            </form>
                                            @if (session()->has('result') )
                                                <div class="alert alert-success alert-solid mt-3"
                                                     role="alert">{{ session('result') }}</div>
                                                @php
                                                    session()->forget('result');
                                                @endphp
                                            @endif

                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                        </div>
                                    </div>
                                </div>


                                <table id="datatablesSimple">

                                    <thead>
                                    <tr>
                                        <th>دسته بندی</th>
                                        <th>موضوع</th>
                                        <th>متن</th>
                                        <th>کاور پست</th>
                                        <th>پست محافظ شده</th>
                                        <th>آپلود ضمیمه</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>دسته بندی</th>
                                        <th>موضوع</th>
                                        <th>متن</th>
                                        <th>کاور پست</th>
                                        <th>پست محافظ شده</th>
                                        <th>آپلود ضمیمه</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @if ($result['blog'])
                                        @foreach($result['blog'] as $item)
                                            <tr>
                                                <td>{{ toCatName($item['cat_id']) }}</td>
                                                <td>{{ $item['subject'] }}</td>
                                                <td>{{ $item['text'] }}</td>
                                                <td>{{ $item['cover'] }}</td>
                                                <td>{{ $item['is_protect'] }}</td>
                                                <td>
                                                    <a href="/admin/blog/attach/{{ $item['id'] }}"
                                                       class="btn  btn-sm bg-secondary text-white rounded-pill"><i
                                                            class="fas fa-upload"></i></a>
                                                </td>
                                                <td>
                                                    <a href="/admin/blog/delete/{{ $item['id'] }}"
                                                       class="btn btn-sm btn-danger" type="button">حذف</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="/admin/assets/js/bootstrap.bundle.min.js"></script>
<script src="/admin/assets/js/scripts.js"></script>

<script src="/admin/assets/js/chart/Chart.min.js"></script>
<script src="/admin/assets/js/chart/chart-area.js"></script>
<script src="/admin/assets/js/chart/chart-pie.js"></script>

<script src="/admin/assets/js/simple-datatables%40latest.js"></script>
<script src="/admin/assets/js/simple-datatables%40demo.js"></script>

<script src="/admin/assets/js/easymde.min.js"></script>
<script>
    var easyMDE = new EasyMDE({
        element: document.getElementById('postEditor'),
        toolbar: ['bold', 'italic', 'heading', '|', 'quote', 'unordered-list', 'ordered-list', '|', 'link', 'image', '|', 'preview', 'guide'],
        initialValue: '',
        direction: 'rtl',
        status: [], // Optional usage

    })
</script>

</body>
</html>
