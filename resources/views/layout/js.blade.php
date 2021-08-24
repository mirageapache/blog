<!-- js 路徑 -->

<!-- 導入js模組順序(1)JQuery,(2)Popper,(3)Bootstrap;一定要按這個順序不然會錯誤!! -->


<script type="text/javascript" src="{{ asset('../node_modules/jquery/dist/jquery.min.js') }}"></script>

<!-- <script type="text/javascript" src="{{ asset('../node_modules/@popperjs/core/dist/umd/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('../node_modules/@popperjs/core/dist/umd/popper.js.map') }}"></script>
<script type="text/javascript" src="{{ asset('../node_modules/bootstrap/dist/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('../node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script> -->

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<!-- 自定js -->
<script src="{{ asset('../resources/script/all.js') }}"></script>