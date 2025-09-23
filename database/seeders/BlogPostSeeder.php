<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlogPost;
use Illuminate\Support\Str;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogPosts = [
            [
                'title' => 'Erawatch – đồng hồ: Điểm đến lý tưởng cho những người đam mê đồng hồ Thụy Sĩ chính hãng',
                'content' => '<p>Trong thế giới của những cỗ máy thời gian, đồng hồ Thụy Sĩ luôn là biểu tượng của sự tinh tế và chất lượng vượt trội. Erawatch tự hào là điểm đến lý tưởng cho những người đam mê đồng hồ Thụy Sĩ chính hãng.</p>

                <p>Với hơn 20 năm kinh nghiệm trong lĩnh vực đồng hồ cao cấp, Erawatch đã xây dựng được uy tín vững chắc trong việc cung cấp những sản phẩm chính hãng từ các thương hiệu nổi tiếng như Rolex, Omega, Patek Philippe, Audemars Piguet và nhiều thương hiệu khác.</p>

                <h3>Chất lượng và uy tín</h3>
                <p>Mỗi chiếc đồng hồ tại Erawatch đều được kiểm tra kỹ lưỡng để đảm bảo tính chính hãng và chất lượng hoàn hảo. Chúng tôi cam kết chỉ bán những sản phẩm 100% chính hãng với đầy đủ giấy tờ bảo hành từ nhà sản xuất.</p>

                <h3>Dịch vụ chuyên nghiệp</h3>
                <p>Đội ngũ nhân viên của Erawatch được đào tạo chuyên sâu về đồng hồ, sẵn sàng tư vấn và hỗ trợ khách hàng lựa chọn được chiếc đồng hồ phù hợp nhất với nhu cầu và phong cách cá nhân.</p>',
                'image' => 'img/DW00100699-247x296.webp',
                'author' => 'Admin',
                'is_published' => true,
            ],
            [
                'title' => 'Tại Sao Grand Seiko Snowflake Là Chiếc Đồng Hồ Biến GS Thành Hiện Tượng Toàn Cầu',
                'content' => '<p>Ít có thương hiệu đồng hồ nào lại có một cộng đồng người hâm mộ đông đảo và trung thành như Grand Seiko. Và trong số tất cả các mẫu đồng hồ của hãng, có một chiếc đặc biệt đã góp phần đưa Grand Seiko lên tầm cao mới trên thị trường quốc tế.</p>

                <h3>Thiết kế độc đáo</h3>
                <p>Grand Seiko Snowflake với mặt số màu trắng tuyết đặc trưng đã trở thành biểu tượng của thương hiệu. Thiết kế này được lấy cảm hứng từ cảnh quan tuyết phủ của vùng Shinshu, nơi đặt nhà máy sản xuất Grand Seiko.</p>

                <h3>Chất lượng vượt trội</h3>
                <p>Không chỉ có vẻ ngoài ấn tượng, Grand Seiko Snowflake còn sở hữu bộ máy Spring Drive độc quyền, kết hợp tinh hoa của đồng hồ cơ và thạch anh để tạo ra độ chính xác tuyệt đối.</p>

                <h3>Tác động toàn cầu</h3>
                <p>Chiếc đồng hồ này đã giúp Grand Seiko khẳng định vị thế trên thị trường quốc tế, đặc biệt là tại các thị trường châu Âu và Mỹ, nơi mà trước đây thương hiệu này chưa được biết đến rộng rãi.</p>',
                'image' => 'img/DW00100699-247x296.webp',
                'author' => 'Editor',
                'is_published' => true,
            ],
            [
                'title' => 'CÁCH PHÂN BIỆT ĐỒNG HỒ DW THẬT GIẢ: Bảo Vệ Túi Tiền và Phong Cách Của Bạn',
                'content' => '<p>Đồng hồ Daniel Wellington (DW) với thiết kế tối giản, thanh lịch đã trở thành một trong những thương hiệu đồng hồ được yêu thích nhất thế giới. Tuy nhiên, sự nổi tiếng này cũng kéo theo việc xuất hiện nhiều sản phẩm giả, nhái trên thị trường.</p>

                <h3>Kiểm tra logo và chữ khắc</h3>
                <p>Logo Daniel Wellington trên đồng hồ thật được khắc rất tinh xảo và sắc nét. Chữ "Daniel Wellington" phải được viết đúng font chữ và khoảng cách giữa các chữ cái phải đều nhau.</p>

                <h3>Chất liệu và hoàn thiện</h3>
                <p>Đồng hồ DW thật sử dụng thép không gỉ cao cấp với lớp mạ vàng hoặc bạc chất lượng cao. Bề mặt được đánh bóng mịn màng, không có vết xước hay bong tróc.</p>

                <h3>Dây đeo và khóa</h3>
                <p>Dây đeo của đồng hồ DW thật được làm từ da thật hoặc kim loại cao cấp. Khóa cài phải hoạt động mượt mà và có logo DW được khắc rõ ràng.</p>

                <h3>Mua hàng từ nguồn uy tín</h3>
                <p>Để tránh mua phải hàng giả, hãy mua đồng hồ DW từ các cửa hàng chính hãng hoặc các đại lý được ủy quyền. Luôn yêu cầu hóa đơn và giấy bảo hành chính hãng.</p>',
                'image' => 'img/DW00100699-247x296.webp',
                'author' => 'Expert',
                'is_published' => true,
            ],
            [
                'title' => 'Rolex thử nghiệm với chất liệu cho mặt số GMT-Master II, giới thiệu gốm xanh lá và đá sắt hổ cho sinh nhật lần thứ 70 của biểu tượng',
                'content' => '<p>Rolex giới thiệu hai biến thể GMT-Master II mới, một chiếc trong cấu hình cho sinh nhật lần thứ 70 của biểu tượng với những chất liệu độc đáo chưa từng được sử dụng trước đây.</p>

                <h3>Gốm xanh lá mới</h3>
                <p>Lần đầu tiên trong lịch sử, Rolex sử dụng gốm màu xanh lá cho bezel của GMT-Master II. Chất liệu này được phát triển đặc biệt để kỷ niệm 70 năm ra đời của dòng đồng hồ huyền thoại này.</p>

                <h3>Đá sắt hổ độc đáo</h3>
                <p>Một trong hai phiên bản mới sử dụng đá sắt hổ (tiger iron) cho mặt số, tạo ra hiệu ứng thị giác ấn tượng với những vân đá tự nhiên độc đáo.</p>

                <h3>Công nghệ tiên tiến</h3>
                <p>Cả hai phiên bản đều được trang bị bộ máy Caliber 3285 mới nhất với khả năng dự trữ năng lượng 70 giờ và độ chính xác cao.</p>

                <h3>Ý nghĩa lịch sử</h3>
                <p>Việc ra mắt hai phiên bản đặc biệt này đánh dấu một cột mốc quan trọng trong lịch sử phát triển của Rolex GMT-Master II, một trong những dòng đồng hồ được yêu thích nhất của thương hiệu.</p>',
                'image' => 'img/DW00100699-247x296.webp',
                'author' => 'Reporter',
                'is_published' => true,
            ],
            [
                'title' => 'Rolex Perpetual 1908 Settimo có dây đeo sang trọng mới',
                'content' => '<p>Mẫu đồng hồ lịch lãm nhất của hãng được trang bị dây đeo bảy mắt xích mới, mang đến sự thoải mái và sang trọng tối đa cho người đeo.</p>

                <h3>Thiết kế dây đeo mới</h3>
                <p>Dây đeo Settimo với thiết kế bảy mắt xích được phát triển đặc biệt cho dòng Perpetual 1908. Mỗi mắt xích được chế tác tinh xảo để đảm bảo sự thoải mái tối đa khi đeo.</p>

                <h3>Chất liệu cao cấp</h3>
                <p>Dây đeo được làm từ vàng 18k hoặc thép không gỉ 904L, với lớp mạ vàng hoặc bạch kim tùy theo phiên bản. Bề mặt được đánh bóng và mài cắt tay để tạo ra độ sáng bóng hoàn hảo.</p>

                <h3>Hệ thống khóa an toàn</h3>
                <p>Khóa cài được thiết kế với hệ thống an toàn kép, đảm bảo đồng hồ được cố định chắc chắn trên cổ tay người đeo.</p>

                <h3>Phong cách cổ điển</h3>
                <p>Dây đeo Settimo mang phong cách cổ điển, phù hợp với thiết kế tinh tế của dòng Perpetual 1908, tạo nên sự hài hòa hoàn hảo giữa truyền thống và hiện đại.</p>',
                'image' => 'img/DW00100699-247x296.webp',
                'author' => 'Writer',
                'is_published' => true,
            ],
        ];

        foreach ($blogPosts as $post) {
            BlogPost::create([
                'title' => $post['title'],
                'slug' => Str::slug($post['title']),
                'content' => $post['content'],
                'image' => $post['image'],
                'author' => $post['author'],
                'is_published' => $post['is_published'],
            ]);
        }
    }
}