<?php
include("./components/_index.php");
$theme = new IndexTheme();

$theme->head("مدیریت کلاس");
?>
<div class="p-8 mb-24 w-full">
    <div class="rounded-2xl w-full flex flex-col bg-white bg-opacity-20 min-h-[80vh] backdrop-blur overflow-hidden">
        <div class="bg-white text-teal-900 p-5 flex justify-between">
            <div class="justify-start items-center flex">
                <a class="bg-teal-700 hover:bg-teal-800 py-2 px-4 rounded-xl text-white my-auto" href="/">برگشت</a>
            </div>
            <h2 class="text-xl font-bold justify-start items-center flex">
                ثبت غیبت کلاسی
            </h2>
            <div>
                <label for="">انتخاب کلاس:</label>
                <select name="class_id" id="" class="bg-white py-2 px-4 rounded-xl hover:bg-gray-100 cursor-pointer border border-gray-200">
                    <optgroup label="دهم">
                        <option>دهم مکانیک</option>
                        <option>دهم مکانیک</option>
                        <option>دهم مکانیک</option>
                    </optgroup>
                </select>
            </div>
        </div>
        <div class="flex min-h-[80vh]">
            <div class="flex flex-col p-3 min-h-full bg-white bg-opacity-50 min-h-[80vh] backdrop-blur  text-teal-900">
                <a href="" class="bg-white hover:bg-teal-100 p-4 flex rounded-xl my-2 text-center justify-center flex">چاپ گزارش امروز</a>
                
                <div class="bg-white bg-opacity-50 flex flex-col rounded-xl overflow-hidden">
                    <input class="fa-date p-2 text-center"/>
                    <a href="" class="p-2 text-center hover:bg-teal-100">
                        دریافت گزارش روز
                    </a>
                </div>
                <!-- <a href="">چاپ گزارش امروز</a> -->
            </div>
            <div class="w-full p-2">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi nulla illo nesciunt perspiciatis enim esse odit quibusdam alias, doloremque dignissimos, reiciendis fugit praesentium id possimus nisi quo corporis nostrum maxime!
            </div>
        </div>
    </div>
</div>

<?php $theme->foot(); ?>
