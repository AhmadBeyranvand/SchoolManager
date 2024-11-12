<?php
include("./components/_index.php");
$theme = new IndexTheme();
?>
<?php $theme->head("مدیریت انضباطی هنرستان رازی"); ?>
<div class="flex flex-col items-center relative py-8 md:px-8 px-2 backdrop-blur rounded-3xl">
    <h1 class="text-white text-2xl font-bold mb-5 text-center">به برنامه مدیریت انضباطی هنرستان رازی خوش آمدید</h1>
    <div class="w-full flex justify-between my-5">
        <a class="bg-white rounded-xl py-3 px-5 hover:bg-green-100 mx-auto" href="./classManager.php">ثبت غیبت کلاسی</a>
        <!-- <a class="bg-white rounded-xl py-3 px-5 hover:bg-green-100 mx-auto" href="#">گزارش انضباطی دانش‌آموز</a> -->
        <!-- <a class="bg-white rounded-xl py-3 px-5 hover:bg-green-100 mx-auto" href="#">ثبت غیبت کلاسی</a> -->
    </div>
    <div class="flex w-full">
        <input class="focus:outline-none bg-white p-3 rounded-r-full text-xl md:w-[600px] w-full" name="student_id"
            placeholder="لطفا نام یا قسمتی از نام یا کدملی دانش‌آموز را وارد کنید..." />
        <button
            class="bg-green-100 hover:bg-green-200 text-green-900 text-xl py-3 px-6 rounded-l-full">بررسی</button>
    </div>
    <div style="top: calc(100% - 2rem);" class=" absolute w-full md:px-8 px-2">
        <div id="searchResults" class="md:w-[600px] mx-auto w-full max-h-[400px] overflow-scroll py-6 px-3 mt-0 bg-white md:rounded-t-none rounded-2xl border border-gray-400 flex flex-col">

            <a class="my-1 border border-gray-200 p-4 flex justify-between rounded-xl hover:bg-gray-200" href="/student.php?student_id=1">
                <strong class="ml-auto">نام و نام خانوادگی</strong>
                <p class="mx-auto"> نام پدر </p>
                <p class="mr-auto">شماره کلاس </p>
            </a>

        </div>
    </div>
</div>
<script>
    var container = document.getElementById("searchResults")
    axios.get("/api/listOfAllStudents.php").then(res=>{
        res.data.map(item=>{
            var strongTag = document.createElement("strong")
            strongTag.classList.add("ml-auto")
            strongTag.innerHTML = item.fullName	
            var pFatherTag = document.createElement("p")
            pFatherTag.classList.add("mx-auto");
            pFatherTag.innerHTML = item.fatherName	
            var pClassTag = document.createElement("p")
            pClassTag.classList.add("mr-auto")
            pClassTag.innerHTML = item.classID	
            var aTag = document.createElement("a")
            aTag.classList.add("my-1", "border", "border-gray-200", "p-4", "flex", "justify-between", "rounded-xl", "hover:bg-gray-200");
            aTag.href = "/student.php?id="
            aTag.appendChild(strongTag)
            aTag.appendChild(pFatherTag)
            aTag.appendChild(pClassTag)
            container.appendChild(aTag)

        })
    })
</script>

<?php $theme->foot(); ?>