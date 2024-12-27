<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    private $products = [
        ['id' => 1, 'name' => 'คั่วกลิ้งหมูสับ', 'description' => 'สูตรต้นตำหรับจากภาคใต้ เผ็ดปานกลาง', 'price' => 50, 'image' => '/images/menu1.jpg'],
        ['id' => 2, 'name' => 'แกงใตปลา', 'description' => 'เข้มข้น ของแท้จากภาคใต้', 'price' => 55, 'image' => '/images/menu2.jpg'],
        ['id' => 3, 'name' => 'ขนมจีนน้ำยาปู', 'description' => 'หอม มัน เข้มข้นส่งตรงจากทะเลอ่าวไทย', 'price' => 60, 'image' => '/images/menu3.jpg'],
        ['id' => 4, 'name' => 'แกงส้ม', 'description' => 'เมนูยอดนิยมแห่งอาณาจักรศรีวิชัย', 'price' => 30, 'image' => '/images/menu4.jpg'],
        ['id' => 5, 'name' => 'ไก่ทอดหาดใหญ่', 'description' => 'เมนูซิกเนเจอร์ของสงขลา', 'price' => 129, 'image' => '/images/menu5.jpg'],
        ['id' => 6, 'name' => 'ผัดใบเหลียง', 'description' => 'เมนูอร่อย ประโยชน์เยอะ', 'price' => 50, 'image' => '/images/menu6.jpg'],
        ['id' => 7, 'name' => 'ไก่กอและ', 'description' => 'ของอร่อย สูตรต้นตำหรับจากมุสลิม', 'price' => 60, 'image' => '/images/menu7.jpg'],
        ['id' => 8, 'name' => 'ข้าวยำ', 'description' => 'เมนูยำที่มีประโยชน์เยอะ', 'price' => 40, 'image' => '/images/menu8.jpg'],
        ['id' => 9, 'name' => 'ผัดสตอกุ้ง', 'description' => 'หอม มัน เค็ม นัว กลิ่นแรง', 'price' => 45, 'image' => '/images/menu9.jpg'],
        ['id' => 10, 'name' => 'หมูฮ้อง', 'description' => 'ที่สุดแห่งความนุ่ม นัวร์ หอมเค็ม', 'price' => 65, 'image' => '/images/menu10.jpg'],
    ];

    public function index()
    {
        return Inertia::render('Products/Index', ['products' => $this->products]);  //use Inertia\Inertia; จำเป็น
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = collect($this->products)->firstWhere('id', $id);

        if (!$product) {
            abort(404, 'Product not found');    
        }

        return Inertia::render('Products/Show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
