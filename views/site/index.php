<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome to secai marche!</h1>

        <p class="lead">This is prototype of secai marche.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Let's go marche</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>サプライヤー一覧</h2>

                <p>サプライヤーの登録・編集・削除が出来ます</p>

                <p><a class="btn btn-default" href="/suppliers">サプライヤー一覧 &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>プロダクト一覧</h2>

                <p>プロダクトの登録・編集・削除が出来ます</p>

                <p><a class="btn btn-default" href="/products">プロダクト一覧 &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>店舗一覧</h2>

                <p>店舗の登録・編集・削除が出来ます</p>

                <p><a class="btn btn-default" href="/clients">店舗一覧 &raquo;</a></p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <h2>オーダー一覧</h2>

                <p>オーダーの登録・編集・削除が出来ます</p>

                <p><a class="btn btn-default" href="/orders">オーダー一覧 &raquo;</a></p>
            </div>
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
            </div>
        </div>

    </div>
</div>
