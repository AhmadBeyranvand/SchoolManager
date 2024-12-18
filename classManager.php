<?php
include("./components/_index.php");
$theme = new IndexTheme();

$theme->head("مدیریت کلاس");
?>
<div class="p-8 mb-24 w-full">
    <div class="rounded-2xl w-full flex flex-col bg-white bg-opacity-20 min-h-[80vh] backdrop-blur overflow-hidden content-box">
        <div class="bg-white text-teal-900 p-5 flex justify-between">
            <div class="justify-start items-center flex">
                <a class="bg-teal-700 hover:bg-teal-800 py-2 px-4 rounded-xl text-white my-auto" href="/">برگشت</a>
            </div>
            <h2 class="text-xl font-bold justify-start items-center flex">
                ثبت غیبت کلاسی
            </h2>
            <div>
                <label for="">انتخاب کلاس:</label>
                <select onchange="changeClass()" name="class_id" id="class_id" class="bg-white py-2 px-4 rounded-xl hover:bg-gray-100 cursor-pointer border border-gray-200">
                    <option id="default_select_item" value="0" selected disabled>در حال بارگذاری...</option>
                </select>
            </div>
        </div>
        <div class="flex min-h-[80vh]">
            <div class="flex flex-col p-3 min-h-full bg-white bg-opacity-50 min-h-[80vh] backdrop-blur  text-teal-900">
                <a href="" class="bg-white hover:bg-teal-100 p-4 flex rounded-xl my-2 text-center justify-center flex">چاپ گزارش امروز</a>

                <div class="bg-white bg-opacity-50 flex flex-col rounded-xl overflow-hidden">
                    <input class="fa-date p-2 text-center" />
                    <a href="" class="p-2 text-center hover:bg-teal-100">
                        دریافت گزارش روز
                    </a>
                </div>
                <!-- <a href="">چاپ گزارش امروز</a> -->
            </div>
            <div class="w-full p-2 flex justify-center items-center">
                <?php
                if(isset($_GET["class_id"])) {?>
                <table class="table bg-white rounded-xl w-full mx-0">
                    <thead>
                        <tr>
                            <th class="text-center">شناسه</th>
                            <th class="text-center">نام</th>
                            <th class="text-center">نام خانوادگی</th>
                            <th class="text-center">نام پدر</th>
                            <th class="text-center">کدملی</th>
                            <th class="text-center">عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-center">محمد</td>
                            <td class="text-center">امیری</td>
                            <td class="text-center">عبدالله</td>
                            <td class="text-center">313</td>
                            <td class="flex justify-center">
                                <a class="mx-2 py-1 px-3 bg-gray-100 text-gray-600 rounded-xl my-2 hover:bg-gray-200" href="">ثبت غیبت</a>
                                <a class="mx-2 py-1 px-3 bg-gray-100 text-gray-600 rounded-xl my-2 hover:bg-gray-200" href="">ثبت فرار</a>
                                <a class="mx-2 py-1 px-3 bg-gray-100 text-gray-600 rounded-xl my-2 hover:bg-gray-200" href="">دریافت گزارش</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php } else{
                    ?>
                <div class="no-classroom text-white">
                    <img src="/images/404.png" class="max-w-[400px]" />
                    <h3 class="my-3 text-xl text-center">هیچ کلاسی تعریف نشده است</h3>
                </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

<script>
    var data = []
    var classIDSelect = document.getElementsByTagName("select")[0]
    var defaultSelectItem =document.getElementById("default_select_item")
    axios.get("/api/listOfClassRooms.php?with_empties=yes").then(res => {
        if (res.status == 200) {
            // defaultSelectItem.remove()
            res.data.map(item => {
                data = res.data
                var option = document.createElement("option")
                option.text = item.title
                option.value = item.id
                <?php
                if(isset($_GET["class_id"])) {
                    ?>
                if(option.value == <?= $_GET['class_id'] ?>){
                    option.selected = true
                } <?php
                    }else {
                        ?>
                        defaultSelectItem.innerHTML = "لطفا یک کلاس را انتخاب کنید"
                        <?php
                    }
                ?>
                classIDSelect.add(option)
            })
        }
    }).catch(err=>{
        defaultSelectItem.innerHTML = "خطا در هنگام بارگیری"
    })

    var changeClass = ()=>{
        window.location.href = "/classManager.php?class_id="+classIDSelect.value
    }
</script>
<?php $theme->foot(); ?>