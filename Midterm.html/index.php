<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำอธิบายการสอบกลางภาค</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
        .bg-gradient-custom {
            /* เปลี่ยนเป็นโทน SlateGray3 - ขาว */
            background: linear-gradient(135deg, #cbd5e1 0%, #FFFFFF 50%, #9fb6cd 100%);
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>
<body class="bg-gradient-custom min-h-screen text-slate-700">

    <nav class="bg-[#9fb6cd]/95 backdrop-blur-sm text-white p-4 sticky top-0 z-50 shadow-lg">
        <div class="container mx-auto flex justify-between items-center px-6">
            <div class="flex items-center gap-3">
                <div class="bg-white/30 p-1.5 rounded-lg shadow-inner">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                    </svg>
                </div>
                <span class="text-xl font-bold tracking-wide text-white drop-shadow-md">สอบกลางภาค</span>
            </div>
            
            <div class="hidden md:flex gap-8 text-sm font-medium items-center text-slate-100">
                <a href="#" class="text-white bg-slate-500 px-3 py-1 rounded-full shadow-sm">คำอธิบาย</a>
                
                <div class="relative dropdown group">
                    <a href="#" class="hover:text-slate-200 transition flex items-center gap-1 py-2 text-white">
                        การเขียนโปรแกรมแบบมีเงื่อนไข 
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </a>
                    <div class="dropdown-menu absolute hidden bg-white text-slate-600 rounded-lg shadow-xl w-56 mt-0 py-2 border border-slate-100">
                        <a href="w01.php" class="block px-4 py-2 hover:bg-slate-50 transition border-b border-slate-50">ข้อที่ 1.1 (20 คะแนน)</a>
                        <a href="w02.php" class="block px-4 py-2 hover:bg-slate-50 transition border-b border-slate-50">ข้อที่ 1.2 (20 คะแนน)</a>
                        <a href="w03.php" class="block px-4 py-2 hover:bg-slate-50 transition border-b border-slate-50 text-slate-400 text-sm">ข้อที่ 1.3 (10 คะแนน)</a>
                        <a href="w04.php" class="block px-4 py-2 hover:bg-slate-50 transition border-b border-slate-50 text-slate-400 text-sm">ข้อที่ 1.4 (10 คะแนน)</a>
                        <a href="w05.php" class="block px-4 py-2 hover:bg-slate-50 transition border-b border-slate-50 text-slate-400 text-sm">ข้อที่ 1.5 (10 คะแนน)</a>
                        <a href="w06.php" class="block px-4 py-2 hover:bg-slate-50 transition text-slate-400 text-sm">ข้อที่ 1.6 (10 คะแนน)</a>
                    </div>
                </div>

                <div class="relative dropdown group">
                    <a href="#" class="hover:text-slate-200 transition flex items-center gap-1 py-2 text-white">
                        เขียนโปรแกรมวนซ้ำ
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </a>
                    <div class="dropdown-menu absolute hidden bg-white text-slate-600 rounded-lg shadow-xl w-56 mt-0 py-2 border border-slate-100">
                         <a href="w07.php" class="block px-4 py-2 hover:bg-slate-50 transition border-b border-slate-50">ข้อที่ 2.1 (10 คะแนน)</a>
                         <a href="w08.php" class="block px-4 py-2 hover:bg-slate-50 transition border-b border-slate-50">ข้อที่ 2.2 (10 คะแนน)</a>
                         <a href="w09.php" class="block px-4 py-2 hover:bg-slate-50 transition border-b border-slate-50">ข้อที่ 2.3 (10 คะแนน)</a>
                         <a href="w10.php" class="block px-4 py-2 hover:bg-slate-50 transition border-b border-slate-50">ข้อที่ 2.4 (10 คะแนน)</a>
                         <a href="w11.php" class="block px-4 py-2 hover:bg-slate-50 transition border-b border-slate-50">ข้อที่ 2.5 (10 คะแนน)</a>
                         <a href="w12.php" class="block px-4 py-2 hover:bg-slate-50 transition border-b border-slate-50">ข้อที่ 2.6 (20 คะแนน)</a>
                         <a href="w13.php" class="block px-4 py-2 hover:bg-slate-50 transition">ข้อที่ 2.7 (30 คะแนน)</a>  
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto py-12 px-4">
        <div class="bg-white/80 backdrop-blur-md rounded-3xl shadow-xl overflow-hidden max-w-5xl mx-auto border border-white">
            
            <div class="p-8 text-center border-b border-slate-100">
                <h1 class="text-3xl font-bold text-slate-700 mb-8">คำอธิบายการสอบกลางภาค</h1>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-left bg-slate-50 p-6 rounded-2xl border border-slate-200">
                    <div class="space-y-2">
                        <p><span class="font-semibold text-[#708090]">สอบกลางภาค:</span> ภาคเรียนที่ 2/2567</p>
                        <p><span class="font-semibold text-[#708090]">รหัสวิชา:</span> 31910-2011</p>
                        <p><span class="font-semibold text-[#708090]">แผนกสาขาวิชา:</span> เทคโนโลยีธุรกิจดิจิทัล</p>
                    </div>
                    <div class="space-y-2">
                        <p><span class="font-semibold text-[#708090]">วิชา:</span> การพัฒนาเว็บไซต์ทางธุรกิจ</p>
                        <p><span class="font-semibold text-[#708090]">นักเรียน:</span> อัฐภิญญา ศรีนิล</p>
                        <p><span class="font-semibold text-[#708090]">วิทยาลัย:</span> วิทยาลัยเทคนิคสระบุรี</p>
                    </div>
                </div>
            </div>

            <div class="p-6 bg-slate-50 text-center border-b border-slate-100">
                <p class="text-slate-600">
                    กรุณาเลือกทำข้อสอบตามหัวข้อด้านล่างตามลำดับ หรือเลือกทำเฉพาะข้อที่สนใจ
                </p>
                <p class="text-sm mt-1 text-slate-500">
                    โดยต้องเลือกทำ <span class="text-[#708090] font-bold">"การเขียนโปรแกรมแบบมีเงื่อนไข" ให้ได้ 20 คะแนน</span> 
                    และ <span class="text-[#9fb6cd] font-bold">"การเขียนโปรแกรมแบบวนซ้ำ" 20 คะแนน</span>
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 divide-y md:divide-y-0 md:divide-x divide-slate-100">
                
                <div class="p-8 hover:bg-slate-50 transition">
                    <h3 class="text-lg font-bold text-slate-700 mb-6 flex items-center gap-2">
                        <span class="bg-[#9fb6cd] text-white w-8 h-8 flex items-center justify-center rounded-full shadow-sm">1</span>
                        ข้อที่ 1.1 - 1.6 การเขียนโปรแกรมแบบมีเงื่อนไข (20 คะแนน)
                    </h3>
                    <ul class="space-y-3">
                        <li class="flex justify-between items-center group">
                            <a href="w01.php" class="text-slate-500 group-hover:text-[#708090] transition">1. คำนวณเงินเดือนพนักงาน</a>
                            <span class="text-xs bg-slate-100 text-slate-600 px-2 py-1 rounded-full font-bold">(20 คะแนน)</span>
                        </li>
                        <li class="flex justify-between items-center group">
                            <a href="w02.php" class="text-slate-500 group-hover:text-[#708090] transition">2. คำนวณภาษีรถยนต์</a>
                            <span class="text-xs bg-slate-100 text-slate-600 px-2 py-1 rounded-full font-bold">(20 คะแนน)</span>
                        </li>
                        <li class="flex justify-between items-center group">
                            <a href="w03.php" class="text-slate-500 group-hover:text-[#708090] transition">3. คำนวณค่าไฟฟ้า</a>
                            <span class="text-xs bg-slate-100 text-slate-500 px-2 py-1 rounded-full">(10 คะแนน)</span>
                        </li>
                        <li class="flex justify-between items-center group">
                            <a href="w04.php" class="text-slate-500 group-hover:text-[#708090] transition">4. คำนวณค่าแรงพนักงาน</a>
                            <span class="text-xs bg-slate-100 text-slate-500 px-2 py-1 rounded-full">(10 คะแนน)</span>
                        </li>
                        <li class="flex justify-between items-center group">
                            <a href="w05.php" class="text-slate-500 group-hover:text-[#708090] transition">5. คำนวณค่าบริการอินเทอร์เน็ต</a>
                            <span class="text-xs bg-slate-100 text-slate-500 px-2 py-1 rounded-full">(10 คะแนน)</span>
                        </li>
                        <li class="flex justify-between items-center group">
                            <a href="w06.php" class="text-slate-500 group-hover:text-[#708090] transition">6. เช็คเลขคู่หรือเลขคี่</a>
                            <span class="text-xs bg-slate-100 text-slate-500 px-2 py-1 rounded-full">(10 คะแนน)</span>
                        </li>
                    </ul>
                </div>

                <div class="p-8 hover:bg-slate-50 transition">
                    <h3 class="text-lg font-bold text-slate-700 mb-6 flex items-center gap-2">
                        <span class="bg-[#9fb6cd] text-white w-8 h-8 flex items-center justify-center rounded-full shadow-sm">2</span>
                        ข้อที่ 2.1 - 2.7 การเขียนโปรแกรมแบบวนซ้ำ (20 คะแนน)
                    </h3>
                    <ul class="space-y-3">
                        <li class="flex justify-between items-center group">
                            <a href="w07.php" class="text-slate-500 group-hover:text-[#708090] transition">1. คำนวณผลรวมเลขคู่</a>
                            <span class="text-xs bg-slate-100 text-slate-500 px-2 py-1 rounded-full">(10 คะแนน)</span>
                        </li>
                        <li class="flex justify-between items-center group">
                            <a href="w08.php" class="text-slate-500 group-hover:text-[#708090] transition">2. คำนวณผลคูณของตัวเลข</a>
                            <span class="text-xs bg-slate-100 text-slate-500 px-2 py-1 rounded-full">(10 คะแนน)</span>
                        </li>
                        <li class="flex justify-between items-center group">
                            <a href="w09.php" class="text-slate-500 group-hover:text-[#708090] transition">3. สูตรคูณ</a>
                            <span class="text-xs bg-slate-100 text-slate-500 px-2 py-1 rounded-full">(10 คะแนน)</span>
                        </li>
                        <li class="flex justify-between items-center group">
                            <a href="w10.php" class="text-slate-500 group-hover:text-[#708090] transition">4. สร้างรูปแบบตัวเลขสามเหลี่ยม</a>
                            <span class="text-xs bg-slate-100 text-slate-500 px-2 py-1 rounded-full">(10 คะแนน)</span>
                        </li>
                        <li class="flex justify-between items-center group">
                            <a href="w11.php" class="text-slate-500 group-hover:text-[#708090] transition">5. สร้างรูปดาวแบบพีระมิด</a>
                            <span class="text-xs bg-slate-100 text-slate-500 px-2 py-1 rounded-full">(10 คะแนน)</span>
                        </li>
                        <li class="flex justify-between items-center group">
                            <a href="w12.php" class="text-slate-500 group-hover:text-[#708090] transition font-medium">6. คำนวณเลขยกกำลัง</a>
                            <span class="text-xs bg-slate-200 text-slate-600 px-2 py-1 rounded-full font-bold">(20 คะแนน)</span>
                        </li>
                        <li class="flex justify-between items-center group">
                            <a href="w13.php" class="text-slate-500 group-hover:text-[#708090] transition font-medium">7. ค้นหาจำนวนเฉพาะ</a>
                            <span class="text-xs bg-slate-500 text-white px-2 py-1 rounded-full font-bold">(30 คะแนน)</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <footer class="mt-8 text-center text-slate-500 text-sm">
            © 2024 ข้อสอบกลางภาค สงวนลิขสิทธิ์ นางสาวอัฐภิญญา ศรีนิล
        </footer>
    </div>

</body>
</html>