<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table("categories")->insert([
        [
            "name" => "Bé Khỏe - Ba Mẹ Thảnh Thơi",
            "description"=> "Giáo dục sớm là nền tảng vững chắc để phát triển tư duy sáng tạo, cho trẻ khám phá nhiều hơn về thế giới xung quanh, cũng như bộc lộ tiềm năng cá nhân. Bố mẹ nên áp dụng phương pháp giáo dục từ sớm, đúng cách và phù hợp để tương lai sau này, trẻ có thể trở thành công dân gương mẫu, toàn diện.",
            "delete_flag"=> 1,
        ],
        [
            "name" => "Đam Mỹ",
            "description"=> "Đam mỹ là thể loại văn học xuất phát từ Trung Quốc, xoay quanh câu chuyện tình yêu giữa hai nam nhân vật. Thể loại này ngày càng phổ biến và được yêu thích trên khắp thế giới.",
            "delete_flag"=> 1,
        ],
        [
            "name" => "Văn Học",
            "description"=> "Văn học là lĩnh vực nghệ thuật sử dụng ngôn ngữ làm công cụ để thể hiện cảm xúc, tư tưởng và trí tưởng tượng của con người. Các tác phẩm văn học giúp người đọc thấu hiểu sâu sắc về cuộc sống và con người.",
            "delete_flag"=> 1,
        ],
        [
            "name" => "Tâm Lý Kỹ Năng",
            "description"=> "Tâm lý kỹ năng là lĩnh vực nghiên cứu về hành vi con người và các phương pháp để cải thiện, phát triển kỹ năng sống, làm việc và giao tiếp. Những cuốn sách về tâm lý kỹ năng giúp người đọc tự tin và thành công hơn trong cuộc sống.",
            "delete_flag"=> 1,
        ],
        [
            "name" => "Thiếu Nhi",
            "description"=> "Thiếu nhi là đối tượng quan trọng trong giáo dục và phát triển. Các tác phẩm dành cho thiếu nhi thường mang tính giáo dục cao, giúp trẻ phát triển tư duy, sáng tạo và nhận thức về thế giới xung quanh.",
            "delete_flag"=> 1,
        ],
        [
            "name" => "Ngoại Văn",
            "description"=> "Ngoại văn bao gồm những tác phẩm văn học từ các quốc gia khác, được dịch sang tiếng Việt. Đây là cửa sổ mở ra thế giới, giúp người đọc hiểu rõ hơn về văn hóa, lịch sử và con người ở các nền văn hóa khác.",
            "delete_flag"=> 1,
        ]
    ]);
    }
}
