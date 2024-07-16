-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2024 at 04:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olblx`
--

-- --------------------------------------------------------

--
-- Table structure for table `600_cau_hoi`
--

CREATE TABLE `600_cau_hoi` (
  `chuong` int(11) NOT NULL,
  `cau` int(11) NOT NULL,
  `cau_diem_liet` int(11) NOT NULL,
  `cauhoi` text NOT NULL,
  `dapan1` text NOT NULL,
  `dapan2` text NOT NULL,
  `dapan3` text NOT NULL,
  `dapan4` text NOT NULL,
  `dapandung` int(11) NOT NULL,
  `img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `600_cau_hoi`
--

INSERT INTO `600_cau_hoi` (`chuong`, `cau`, `cau_diem_liet`, `cauhoi`, `dapan1`, `dapan2`, `dapan3`, `dapan4`, `dapandung`, `img`) VALUES
(1, 1, 0, ' Phần của đường bộ đươc sử dụng cho các phương tiện giao thông qua lại là gì?', '1 – Phần mặt đường và lề đường.', '2 – Phần đường xe chạy.', '3 – Phần đường xe cơ giới.', '', 2, '0'),
(1, 2, 0, '  “Làn đường” là gì?', '1 – Là một phần của phần đường xe chạy được chai theo chiều dọc của đường, sử dụng cho xe chạy.', '2 – Là một phần của phần đường xe chạy được chia theo chiều dọc của đường, có bề rộng đủ cho xe chạy an toàn.', '3 – Là một phần của phần đường xe chạy được chia theo chiều dọc của đường, có đủ bề rộng cho xe ô tô chạy an toàn.', '', 2, '0'),
(1, 3, 0, ' Khái niệm “khổ giới hạn đường bộ” được hiểu như thế nào là đúng?', '1 – Là khoảng trống có kích thước giới hạn về chiều cao, chiều rộng của đường, cầu, bến phà, hầm đường bộ để các xe kể cả hàng hóa xếp trên xe đi qua được an toàn.', '2 – Là khoảng trống có kích thước giới hạn về chiều rộng của đường, cầu, bến phà, hầm trên đường bộ để các xe kể cả hàng hóa xếp trên xe được đi qua an toàn.', '3 – Là khoảng trống có kích thước giới hạn về chiều cao của đường, cầu, bến phà, hầm trên đường bộ để các xe được đi qua an toàn.', '', 1, '0'),
(1, 4, 0, ' Trong các khái niệm dưới đây, “dải phân cách” được hiểu như thế nào là đúng?', '1 – Là bộ phận của đường để ngăn cách không cho các loại xe vào những nơi không được phép.', '2 – Là bộ phận đươcng để phân tách phần đường xe chạy và hành lang an toàn giao thông.', '3  – Là bộ phận của đường để phân chia mặt đường thành hai chiều xe chạy riêng biệt hoặc để phân chia phần đường của xe cơ giới và xe thô sơ.', '', 3, '0'),
(1, 5, 0, ' “Dải phân cách” trên đường bộ gồm những loại nào?', '1 – Dải phân cách gồm loại cố định và loại di động.', '2 – Dải phân cách gồm tường chống ồn, hộ lan cứng và hộ lan mềm.', '3 – Dải phân cách gồm giá long môn và biển báo hiệu đường bộ.', '', 1, '0'),
(1, 6, 0, ' Người lái xe được hiểu như thế nào trong các khái niệm dưới đây?', '1 – Là người điều khiển xe cơ giới.', '2 – LÀ người điều khiển xe thô sơ.', '3 – LÀ người điều khiển xe có súc vật kéo.', '', 1, '0'),
(1, 7, 0, ' Đường mà trên đó phương tiện tham gia giao thông được các phương tiện giao thông được các phương tiện giao thông đến từ hướng khác nhường đường khi qua nơi đường giao nhau, được cắm biển báo hiệu đường ưu tiên là loại đường gì?', '1 – Đường không ưu tiên.', '2 – Đường tỉnh lộ.', '3 – Đường quốc lộ.', '4 – Đường ưu tiên.', 4, '0'),
(1, 8, 0, ' Khai niệm “phương tiện giao thông cơ giới đường bộ” được hiểu thế nào là đúng?', '1 – Gồm ô tô, máy kéo, xe mô tô hai bánh, xe mô to ba bánh, xe gắn máy, xe cơ giới dùng cho người khuyết tật và xe máy chuyên dùng.', '2 – Gồm xe ô tô; máy kéo; rơ moóc hoặc sơ mi rơ moóc được kéo bởi xe ô tô, máy kéo; xe mô tô hai bánh; xe mô tô ba bánh, xe gắn máy(kể cả xe máy điện) và các loại xe tương tự.', '', '', 2, '0'),
(1, 9, 0, ' Khái niệm “phương tiện giao thông thô sơ đường bộ” được hiểu thế nào là đúng?', '1 – Gồm xe đạp (kể cả xe đạp máy, xe đạp điện), xe xích lô, xe lăn dùng cho người khuyết tật, xe súc vật kéo và các loại xe tương tự.', '2 – Gồm xe đạp(kể cả xe đạp máy, xe đạp điện), xe gắn máy, xe cơ giới dùng cho người khuyết tật và xe máy chuyên dùng.', '3- Gồm xe ô tô, máy kéo, rơ moóc hoặc sơ mi rơ mo óc được kéo bơi xe ô tô, máy kéo.', '', 1, '0'),
(1, 10, 0, ' “ Phương tiện tham gia giao thông đường bộ” gồm những loại nào?', '1 – Phương tiện giao thông cơ giới đường bộ.', '2 – Phương tiện giao thông thô sơ đường bộ và xe máy chuyên dùng.', '3 – Cả ý 1 và 2.', '', 3, '0'),
(1, 11, 0, ' “Người tham gia giao thông đường bộ” Gồm những đối tượng nào?', '1 – Người điều khiển, người sử dụng phương tiện tham giao giao thông đường bộ.', '2 – Người điều khiển, dẫn dắt súc vật, người đi bộ trên đường.', '3 – Cả ý 1 và ý 2.', '', 3, '0'),
(1, 12, 0, ' “Người điều khiển phương tiện tham gia giao thông đường bộ” gồm những đối tượng nào dưới đây?', '1 – Người điều khiển xe cơ giới, người điều khiển xe thô sơ.', '2 – Người điều khiển xe máy chuyên dùng thao gia giao thông đường bộ.', '3 – Cả ý 1 và ý 2.', '', 3, '0'),
(1, 13, 0, ' Khai niệm “người điều khiển giao thông” được hiểu như thế nào đúng?', '1 – Là người điều khiển phương tiện tham gia giao thông tại nơi thi công, nơi ùn tắc giao thông, ở bến phà, tại cầu đường bộ đi chung với đường sắt.', '2 – Là cảnh sát giao thông, người được giao nhiệm vụ hướng dẫn giao thông tại nơi thi công, nơi ùn tắc giao thông, ở bến phà, tại cầu đường bộ đi chung với đường sắt.', '3 – Là người tham gia giao thông tại nơi thi công, nơi ùn tắt giao thông, ở bến phà, tại cầu đường bộ đi chung với đường sắt.', '', 2, '0'),
(1, 14, 0, ' Trong các khái niệm dưới đây khái niệm “dừng xe” được hiểu như thế nào là đúng?', '1 – Là trạng thái đừng yên của phương tiện giao thông không giới hạn thời gian để cho người lên xuống phương tiện, xếp dỡ hàng hóa hoặc thực hiện công việc khác.', '2 – Là trạng thai đứng yên tạm thời của phương tiện giao thông trong một khoảng thời gian cần đủ để cho người lên, xuống phương tiện, xếp dỡ hàng hóa hoặc thực hiện công việc.', '3 – Là trạng thái đứng yên của phương tiện giao thông không giới hạn thời gian giữa 02 lần vận chuyển hàng hóa hoặc hành khách.', '', 2, '0'),
(1, 15, 0, ' Khái niệm “đỗ xe” được hiểu như thế nào là đúng quy tắc giao thông?', '1 – Là trạng thái đứng yên của phương tiện giao thông có giới hạn trong một khoảng thời gian cần thiết đủ để cho người lên, xuống phương tiện đó, xếp dỡ hàng hóa hoặc thực hiện công việc khác.', '2 – Là trạng thái đứng yên của phương tiện giao thông không giới hạn thời gian.', '', '', 2, '0'),
(1, 16, 0, ' Khái niệm “đường cao tốc” được hiểu như thế nào là đúng?', '1 – Đường dành riêng cho xe ô tô và một số loại xe chuyên dùng được phép đi vào theo quy đinh của luật giao thông đường bộ.', '2 – Có dải phân cách phân chia đường cho xe chạy hai chiều riêng biệt mà dải phân cách này xe không được đi lên trên; không giao nhau cùng mức với một hoặc một số đường khác.', '3 – Đường bố trí đầy đủ trang thiết bị phục vụ, bảo đảo giao thông liên tục, an toàn, rút ngắn thời gian hành trình và chỉ cho xe ra, vào ở những điểm nhất định.', '4 – Tất cả các ý trên.', 4, '0'),
(1, 17, 1, ' Hành vi nào dưới đây bị nghiêm cấm?', '1 – Đỗ xe trên đường phố.', '2 – Sử dụng xe đạp đi trên các tuyến quốc lộ có tốc độ cao.', '3 – Làm hỏng (cố ý) cọc tiêu, giương cầu, dải phân cách.', '4 – Sử dụng còi và quay đầu xe trong khu dân cư.', 3, '0'),
(1, 18, 1, ' Hành vi đưa xe cơ giới, xe máy chuyên dùng không bảo đảm tiêu chuẩn an toàn kỹ thuật và bảo vệ môi trường vào tham gia giao thông đường bộ có bị nghiêm cấm hay không?', '1 – Không bị nghiêm cấm.', '2 – Bị nghiêm cấm.', '3 – Bị nghiêm cấm tùy theo các tuyến đường.', '4 – Bị nghiêm cấm tùy theo loại xe.', 2, '0'),
(1, 19, 1, ' Cuộc đua xe chỉ được thực hiện khi nào?', '1 – Diễn ra trên đường phố không có người qua lại.', '2 – Được người dân ủng hộ.', '3 – Được cơ quan có thẩm quyền cấp phép.', '', 3, '0'),
(1, 20, 1, ' Người điều khiển phương tiện giao thông đường bộ mà trong cơ thể có chất ma túy có bị nghiêm cấm hay không?', '1 – Bị nghiêm cấm.', '2 – Không bị nghiêm cấm.', '3 – Không bị nghiêm cấm, nếu có chất ma túy ở mức nhẹ, có thể điều khiển phương tiện tham gia giao thông.', '', 1, '0'),
(1, 21, 1, ' Việc lái xe mô tô, ô tô, máy kéo ngay sai khi uống rượu, bia có được phép không?', '1 – Không được phép.', '2 – Chỉ được lái ở tốc độ chậm và quãng đường ngắn.', '3 – Chỉ được lái nếu trong cơ thể có nồng độ cồn thấp.', '', 1, '0'),
(1, 22, 1, ' Người điều khiển ô tô, mô tô, máy kéo trên đường mà trong máu hoặc hơi thở có nồng độ cồn có bị nghiêm cấm không?', '1 – Bị nghiêm cấm.', '2 – Không bị nghiêm cấm.', '3 – Không bị nghiêm cấm nếu nồng độ cồn trong máu ở mức nhẹ có thể điều khiển được phương tiện giao thông.', '', 1, '0'),
(1, 23, 1, ' Sử dụng rượu, bia khi lái xe, nếu bị phát hiện thì bị xử lý như thế nào?', '1 – Chỉ bị nhắc nhở.', '2 – Bị xử phạt hành chính hoặc có thể bị xử lý hình sự tùy theo mức độ vi phạm.', '3 – Không bị xử lý hình sự.', '', 2, '0'),
(1, 24, 1, ' Theo luật phòng chống tác hại của rượu, bia, đối tượng nào dưới đây bị cấm sử dụng rượu bia khi tham gia giao thông?', '1 – Người điều khiển: Xe ô tô, Xe mô tô, xe đạp, xe gắn máy.', '2 – Người ngồi phía sau người điều khiển xe cơ giới.', '3 – Người đi bộ.', '4 – Cả ý 1 và ý 2.', 1, '0'),
(1, 25, 1, ' Hành vi xe cơ giới, xe máy chuyên dùng cho người không đủ điều kiện để điều khiển xe tham gia giao thông có được phép hay không?', '1 – Chỉ được thực hiện nếu đã hướng dẫn đầy đủ.', '2 – Không được phép.', '3 – Được phép tùy từng trường hợp.', '4 – Chỉ được phép thực hiện với thành viên trong gia đình.', 2, '0'),
(1, 26, 1, ' Hành vi điều khiển xe cơ giới chạy quá tốc độ quy định, giành đường, vượt ẩu có nghiêm cấm hay không?', '1 – Bị nghiêm cấm tùy từng trường hợp.', '2 – Không bị nghiêm cấm.', '3 – Bị nghiêm cấm.', '', 3, '0'),
(1, 27, 1, ' Khi lái xe trên đường, người lái xe cần quan sát và bảo đảm tốc độ phương tiện như thé nào?', '1 – Chỉ lớn hơn tốc độ tối đa cho phép khi đường vắng.', '2 – Chỉ lớn hơn tốc độ tối đa cho phép vào ban đâm.', '3 – Không vượ quá tốc độ cho phép.', '', 3, '0'),
(1, 28, 1, ' Phương tiện giao thông đường bộ di chuyển với tốc độ thấp hơn phải đi như thế nào?', '1 – Đi về phía bên trái.', '2 – Đi về phía bên phải.', '3 – Đi ở giữa.', '', 2, '0'),
(1, 29, 1, ' Trên đường có nhiều làn đường, khi điều khiển phương tiện ở tốc độ chậm bạn phải đi ở làn đường nào?', '1 – Đi ở làn đường phải trong cùng.', '2 – Đi ở làn phái bên trái.', '3 – Đi ở làn giữa.', '4 – Đi ở bất cứ làn nào nhưng phải bấm đèn cảnh báo nguy hiểm để báo hiệu cho các phương tiện khác.', 1, '0'),
(1, 30, 1, ' Hành vi vượt xe tại các vị trí có tầm nhìn hạn chế, đường vòng, đầu dóc có bị nghiêm cấm hay không?', '1 – Không bị nghiêm cấm.', '2 – Không bị nghiêm cấm khi rất vội.', '3 – Bị nghiêm cấm.', '4 – Không bị nghiêm cấm khi khẩn cẩn.', 3, '0'),
(1, 31, 0, ' Khi lái xe trong khu đô thị và đông dân cư trừ các khu vực có biển cấm sử dụng còi, người lái xe được sử dụng còi như thế nào trong các trường hợp dưới đây?', '1 – Từ 22 giờ đén 5 giờ sáng.', '2 – Từ 5 giờ sáng đến 22 giờ.', '3 – Từ 23 giờ đêm đến 5 giờ sáng hôm sau.', '', 2, '0'),
(1, 32, 0, ' Người lái xe sử dụng đèn như thế nào khi lái xe trong khu đô thị và đông dân cư vào ban đêm?', '1 – Bất cứ đèn nào miễn là mắt nhìn rõ phía trước.', '2 – Chỉ bật đèn chiếu xa (đèn pha) khi không nhìn rõ đường.', '3 – Đèn chiếu xa (đèn pha) khi đường vắng, đèn chiếu pha gần (đèn cốt) khi có xe đi ngược chiều.', '4 – Đèn chiếu gần (đèn cốt).', 4, '0'),
(1, 33, 1, ' Hành vi lắp đặt, sử dụng còi, đèn không đúng thiết kế của nhà sản xuất đối với từng loại xe cơ giới có được phép hay không?', '1 – Được phép.', '2 – Không được phép.', '3 – Được phép tùy theo trường hợp.', '', 2, '0'),
(1, 34, 0, ' Trong trường hợp đặc biết, để được lắp đặt, sử dụng còi, đèn khác thiết kế của nhà sản xuất đối với từng loại xe cơ giới bạn phải đảm bảo yêu cầu nào dưới đây?', '1 – Phải đảm bảo phụ tùng do đúng nhà sản xuất đó cung cấp.', '2 – Phải được chấp thuận của cơ quan có thẩm quyền.', '3 – Phải là xe đăng ký và hoạt động tại các khu vực có địa hình phức tạp.', '', 2, '0'),
(1, 35, 1, ' Việc sản xuất, mau bán, sử dụng biển số xe cơ giới, xe máy chuyên dùng được quy định như thế nào trong Luật Giao thông đường bộ?', '1 – Được phép sản xuất, sử dụng khi bị mất biển số.', '2 – Được phép mua bán, sử dụng khi bị mất biển số.', '3 – Nghiêm cấm sản xuất, mua bán sử dụng trái phép.', '', 3, '0'),
(1, 36, 1, ' Người lái xe không được vượt xe khác khi gặp trường hợp nào ghi ở dưới đây?', '1 – Trên cầu hẹp có một làn xe.', ' Nơi đường giao nhau, đường bộ giao nhau cùng mức với đường sắt; xe được quyền ưu tiên đang phát tín hiệu ưu tiên đi làm nhiệm vụ.', '2 – Trên cầu có từ 02 làn xe trở lên; nơi đường bộ giao nhau không cùng mức với đường sắt; xe được quyền ưu tiên đang đi phía trước nhưng không phát tín hiệu ưu tiên.', '3 – Trên đường có 2 làn đường được phân chia làn bằng vạch kẻ nét đứt.', 1, '0'),
(1, 37, 1, ' Ở phần đường dành cho người đi bộ qua đường, trên cầu, đầu cầu, đường cao tốc, đường hẹp, đường dốc, tại nơi đường bộ giao nhau cùng mức với đường sắt có được quay đầu xe hay không?', '1 – Được phép.', '2 – Không được phép.', '3 – Tùy từng trường hợp.', '', 2, '0'),
(1, 38, 0, ' Bạn đang lái xe phía trước có một xe cảnh sát giao thông không phát tín hiệu ưu tiên bạn có được phép vượt hay không?', '1 – Không được phép.', '2 – Được vượt khi đang trên cầu.', '3 – Được phép vượt khi qua nơi giao nhau có ít phương tiện cùng tham gia giao thông.', '4 – Được vượt khi đảm bảo an toàn.', 4, '0'),
(1, 39, 0, ' Bạn đnag lái xe phía trước có một xe cứu thương đang phát tín hiệu ưu tiên có được phép vượt hay không?', '1 – Không được vượt.', '2 – Được vượt khi đang trên cầu.', '3 – Được phép vượt khi qua nơi giao nhau có ít phương tiện cùng tham gia giao thông.', '4 – Được vượt khi đảm bảo an toàn.', 1, '0'),
(1, 40, 1, ' Người lái xe không được quay đầu xe trong các trường hợp nào dưới đây?', '1 – Ở phần đường dành cho người đi bọ qua đường, trên cầu, đầu cầu, đường cao tốc, đường hẹp, đường dốc, tại nơi đường bộ giao nhau cùng mức với đường sắt.', '2 – Ở phía trước hoặc phía sau của phần đường dành cho người đi bộ qua đường, trên đường quốc lộ, tại nơi đường bộ giao giao nhau không cùng mức với đường sắt.', '3 – Cả ý 1 và ý 2.', '', 1, '0'),
(1, 41, 0, ' Bạn đang lái xe trong khu dân cư, có đông xe qua lại, nếu muốn quay đầu xe bạn cần làm gì để tránh lại, nếu muốn quay đầu xe bạn cần làm gì để tránh ùn tắc và đảm bảo an toàn giao thông?', '1 – Đi tiếp đến điểm giao cắt gần nhất hoặc nơi có biển báo cho phép quay đầu xe.', '2 – Bấm đèn khẩn cấp và quay đầu xe từ từ bảo đảm an toàn.', '3 – Bấm còi liên tục khi quay đầu xe để cảnh báo các xe khác.', '4 Nhờ một người ra hiệu giao thông trên đường Chậm lại trước khi quay đầu xe.', 1, '0'),
(1, 42, 0, ' Người lái xe không được lùi xe ở những khu vực nào dưới đây?', '1 – Ở khu vực cho phép đỗ xe.', '2 – Ở khu vực cấm dừng và trên phần đường dành cho người đi bộ qua đường.', '3 – Nơi đường bộ giao nhau, đường bộ giao nhau cùng mức với đường sắt, nơi tầm nhìn bị che khuất, trong hầm đường bộ, đường cao tốc.', '4 – Cả ý 2 và ý 3.', 4, '0'),
(1, 43, 1, ' Người điều khiển phương tiện giao thông trên đường phố có được dừng xe, đỗ xe trên miệng cống thoát nước, miệng hầm của đường điện thoại, điện cao thế, chỗ dành riêng cho xe chữa cháy lấy nước hay không?', '1 – Đường dừng xe, đỗ xe trong trường hợp cần thiết.', '2 – Không được dừng xe, đỗ xe.', '3 – Được dừng xe, không được đỗ xe.', '', 2, '0'),
(1, 44, 0, ' Khi xe đã kéo 1 xe hoặc xe đã kéo 1 rơ moóc, bạn có được phép kéo thêm xe (kể cả xe thô sơ) hoặc rơ moóc thứ hai hay không?', '1 – Chỉ được thực hiện trên đường quốc lộ có hai làn xe một chiều.', '2 – Chỉ được thực hiện trên đường cao tốc.', '3 – Không được thực hiện ban ngày.', '4 – Không được phép.', 4, '0'),
(1, 45, 1, ' Người điều khiển xe mô tô hai bánh, ba bánh, xe gắn máy có được phép sử dụng xe để kéo hoặc đẩy các phương tiện khác khi tham gia giao thông không?', '1 – Được phép.', '2 – Nếu phương tiện được kéo, đẩy có khối lượng nhỏ hơn phương tiện của mình.', '3 – Tùy trường hợp.', '4 – Không được phép.', 4, '0'),
(1, 46, 1, ' Khi điều khiển xe mô tô hai bánh, xe mô tô ba bánh, xe gắn máy, những hành vi buông cả hai tay; sử dụng xe để kéo, đẩy xe khác, vật khác; sử dụng chân chống của xe quệt xuống đường khi xe đang chạy có được phép không?', '1 – Được phép.', '2 – Tùy trường hợp.', '3 – Không được phép.', '', 3, '0'),
(1, 47, 1, ' Khi điều khiển xe mô tô hai bánh, xe mô tô ba bánh, xe gắn máy, những hành vi nào không được phép?', '1 – Buông cả hai tay; sử dụng xe để kéo, đẩy xe khác, vật khác; sử dụng chân chống của xe quệt xuống đường khi xe đang chạy.', '2 – Buông một ta; sử dụng xe để chở người hoặc hàng hóa; để chân chạm xuống đất khi khởi hành.', '3 – Đội mũ bảo hiểm; chạy xe đúng tốc độ quy định và chấp hành đúng quy tắc giao thoogn đường bộ.', '4 – Chở người ngôi sau dưới 16 tuổi.', 1, '0'),
(1, 48, 1, ' Người ngồi trên xe mô tô hai bánh, ba bánh, xe gắn máy khi tham gia giao thông có được mang, vác vật cồng kềnh hay không?', '1 – Được mang vác, tùy trường hợp cụ thể.', '2- Không được mang vác.', '3 – Được mang, vác nhưng phải đảm bảo an toàn.', '4 – Được mang vác tùy theo sức khỏe của bạn.', 2, '0'),
(1, 49, 1, ' Người ngồi trên xe mô tô hai bánh, xe mô tô ba bánh, xe gắn máy khi tham gia giao thông có được bám, kéo hoặc đẩy các phương thiện khác không?', '1 – Được phép.', '2 – Được bám trong trường hợp phương tiện của mìn bị hỏng.', '3 – Không được phép.', '', 4, '0'),
(1, 50, 1, ' Người ngôi trên xe mô tô hai bánh, xe mô tô ba bánh, xe gắn máy khi tham gia giao thông có được sử dụng ô khi trười mưa hay không?', '1 – Được sử dụng.', '2 – Chỉ người ngôi sau được sử dụng.', '3 – Không được sử dụng.', '4 – Được sử dụng nếu không có áo mưa.', 3, '0'),
(1, 51, 1, ' Khi đang lên dốc người ngồi trên xe mô tô có được phép kéo theo người đang điều khiển xe đạp hay không?', '1 – Chỉ được phép nếu cả hai đội mũ bảo hiểm.', '2 – Không được phép.', '3 – Chỉ được phép thực hiện trên đường thật vắng.', '4 – Chỉ được phép khi người đi xe đạp đã quá mệt.', 2, '0'),
(1, 52, 1, ' Hành vi sử dụng xe mô tô để kéo, đẩy xe mô tô khác bị hết xăng đến trạm mua xăng có được phép hay không?', '1 – Chỉ được kéo nếu đã nhìn thấy trạ xăng.', '2 – Chỉ được thực hiện trên đường vứng phương tiện cùng tham gia giao thông.', '3 – Không được phép.', '', 3, '0'),
(1, 53, 1, ' Hành vi vận chuyển đồ vật cồng kềnh bằng xe mô tô, xe gắn máy khi tham gia giao thông có được phép hay không?', '1 – Không được vận chuyển.', '2 – Chỉ được vận chuyển khi đã chằng buộc cẩn thận.', '3 – Chỉ được vận chuyển vật cồng kềnh trên xe máy nếu khoảng cách về nhà ngắn hơn 2 km.', '', 1, '0'),
(1, 54, 0, ' Người đủ bao nhiêu tuổi trở lên thì được điều khiển xe ô tô tải, máy kéo có trọng tải từ 3.500kg trở lên; xe hạng B2 kéo rơ moóc(FB2)?', '1 – 19 tuổi.', '2 – 21 Tuổi.', '3 – 20 Tuổi.', '', 2, '0'),
(1, 55, 0, ' Người đủ bao nhiêu tuổi trở lên thì được điều khiern xe mô tô hai bánh, xe mô tô ba bánh có dung tích xi lanh từ 50 cm3 trở lên và các loại xe có kết cấu tương tự; xe ô tô tải, máy kéo có trọng tải dưới 3500kg; xe ô tô chở người đến 9 chỗ ngồi?', '1 – 16 Tuổi.', '2 – 18 Tuổi.', '3 – 17 Tuổi.', '', 2, '0'),
(1, 56, 0, ' Người lái xe ô tô chở người trên 30 chỗ ngồi (hạng E), lái xe hạng D kéo rơ Moóc (FD) phải đủ bao nhiêu tuổi trở lên?', '1 – 23 Tuổi.', '2 – 24 Tuổi.', '3 – 27 Tuổi.', '4 – 30 Tuổi.', 3, '0'),
(1, 57, 0, ' Tuổi tối đa cửa người lái xe ô tô chở người trên 30 chỗ ngồi (hạng E) là bao nhiêu tuổi?', '1 – 55 tuổi đối với nam và 50 tuổi đối với nữ.', '2 – 55 tuổi đối vơi nam và nữ.', '3 – 60 tuổi đối với nam và 55 tuổi đối với nữ.', '4 – 45 tuổi với nam và 40 tuổi đối với nữ.', 1, '0'),
(1, 58, 0, ' Người lái xe chở từ 10 đến 30 chỗ ngồi (hạng D), lái xe hạng C kéo rơ Moóc(FC) phải đủ bao nhiêu tuổi trở lên?', '1 – 23 Tuổi.', '2 – 24 tuổi.', '3 – 22 tuổi.', '4 – 18 tuổi.', 2, '0'),
(1, 59, 0, ' Người đủ 16 tuổi được điều khiển các loại xe nào dưới Đây?', '1 – Xe mô tô 2 bánh có dung tích xi-lanh từ 50 cm3 trở lên.', '2 – Xe gắn máy có dung tích xi-lanh dưới 50 cm3.', '3 – Xe ô tô tải dưới 3.', '500kg; xe chở người đến 9 chỗ ngồi.', 2, '0'),
(1, 60, 0, ' Người có giấy phép lái xe mô tô hạng A1 không được phép điều khiển loại xe nào dưới đây?', '1 – Xe mô tô có dung tích xi-lanh 125 cm3.', '2 – Xe mô tô có dung tích xi-lanh từ 175 cm3 trở lên.', '3 – Xe mô tô có dung tích xi-lanh 100 cm3.', '', 2, '0'),
(1, 61, 0, ' Người có giấy phép lái xe mô tô hạng A1 được phép điều khiển các loại xe nào dưới đây?', '1 – Xe mô tô có dung tích xi-lanh từ 50 Cm3 đến dưới 175 cm3.', '2 – Xe mô tô ba bánh dành cho người khuyết tật.', '3 – Cả ý 1 và ý 2.', '', 3, '0'),
(1, 62, 0, ' Người có giấy phép lái xe mô tô hạng A2 được phép điều khiển loại xe nào dưới đây?', '1 – Xe mô tô ba bánh.', '2 – Xe mô tô hai bánh có dung tích xi-lanh từ 175 cm3 trở lên và các loại xe quy định cho giấy phép lái xe hạng A1.', '3 – Các lọi máy kéo nhỏ có trọng tải đến 1000.', '', 2, '0'),
(1, 63, 0, ' Người có giấy phép lái xe mô tô hạng A3 được phép điều khiển loại xe nào dưới đây?', '1 – Xe mô tô ba bánh.', '2 – Xe mô tô hai bánh có dung tích xi lanh từ 175 Cm3 trở lên.', '3 – Các loai máy kéo nhỏ có trọng tải đến 1000 kg.', '', 1, '0'),
(1, 64, 0, ' Người có giấy phép lái xe hạng B1 số tự động được điều khiển loại xe nào?', '1 – Ô tô số tự động chở người đến 9 chỗ ngồi, kể cả chỗ ngồi cho người lái xe; ô tô tải, kể cả ô tô tải chuyên dùng số tự động có trọng tải thiết kế dưới 35000 kg; ô tô dung cho người khuyết tật; Không được hành nghề lái xe.', '2 – Ô tô số tự động chở người đến 9 chỗ ngồi, kể cả chỗ ngồi cho người lái xe; ô tô tải, kể cả ô tô tải chuyên dùng số tự động có trọng tải thiết kế dưới 3.', '500 kg; ô tô dùng cho người khuyết tật; Được hành nghề lái xe kinh doanh vận tải.', '3 – Ô tô chở người đến 9 chỗ ngồi, kể cả chỗ ngồi cho người lái xe; ô tô tải, kể cả ô tô tải chuyên dùng có trọng tải thiết kế dưới 3.', 1, '0'),
(1, 65, 0, ' Người có giấy phép lái xe hạng B1 được điều khiển loại xe nào?', '1 – Ô tô chỏ người đến 9 chỗ ngồi, kể cả chỗ ngồi cho người lái xe; ô tô tải, kể cả ô tô tải chuyên dùng có trọng tải thiết kế dưới 3.', '500kg; máy kéo kéo một rơ moóc có trọng tải thiết kế dưới 3.', '500 kg; Được hành nghề lái xe.', '2 – Ô tô chở người đến 9 chỗ ngồi, kể cả chỗ ngồi cho người lái xe; ô tô tải, kể cả ô tô tải chuyên dùng có trọng tải thiết kế dưới 3.', 2, '0'),
(1, 66, 0, ' Người có giấy phép lái xe hạng B2 được điều khiển loại xe nào?', '1 – Xe ô tô chở người trên 9 chỗ ngồi; xe ô tô tải; xe kéo có trọng tải trên 3.', '500kg.', '2 – Xe ô tô chở người đến 9 chỗ ngồi; xe ô tô tải; máy kéo có trọng tải dưới 3.', '500kg.', 2, '0'),
(1, 67, 0, ' Người có giấy phép lái xe hạng C được điều khiển loại xe nào?', '1 – Xe ô tô chở người trên 9 chỗ ngồi; xe ô tô tải; máy kéo có trọng tải trên 3.', '500kg.', '2 – Xe ô tô chở người từ 10 đến 30 chỗ ngồi; xe ô tô tải; máy kéo có trọng tải trên 3.', '500kg.', 3, '0'),
(1, 68, 0, ' Người có giấy phép lái xe hạng D được điều khiển loại xe nào dưới đây?', '1 – Xe ô tô chở người đến 30 chỗ ngồi, kể cả chỗ ngồi cho người lái xe; xe ô tô tải, máy kéo có trọng tải 3.', '500kg.', '2 – Xe ô tô chở người trên 30 chỗ ngồi; xe ô tô tải, máy kéo có trọng tải trên 3.', '500kg.', 1, '0'),
(1, 69, 0, ' Người có giấy pháp lái xe hạng E được điều khiển loại xe nào dưới đây?', '1 – Xe kéo rơ Moóc, ô tô đầu kéo kéo sơ mi và rơ moóc và được điều khiển các loại xe theo quy định cho giấy phép lái xe hạng B1, B2, C và FB2.', '2 – Xe ô tô chở người trên 20 chỗ ngồi; xe ô tô tải, máy kéo có trọng tải trên 3.', '500 kg.', '3 – Xe kéo rơ mo óc và được điều kheiern các loại xe; ô tô chở khách nối toa và các loại xe quy định cho giấy phép lái xe hạng B1, B2, C, D, FB2, FD.', 2, '0'),
(1, 70, 0, ' Người có giấy phép lái xe hạng FC được điều khiển loại xe nào dưới đây?', '1 – Các loại xe được quy định tại giấy phép lái xe hạng C có kéo rơ moóc, ô tô đầu kéo sơ mi rơ moóc, ô tô chở khách nối toa và được điều khiển các loại xe quy định cho giấy phép láu xe hạng B1, B2 và FB2.', '2 – Các loại xe được quy định tại giấy phép lái xe hạng C có kéo rơ mooc, ô tô đầu kéo kéo sơ mi, rơ moóc và được điều khiển các loại xe quy định cho giấy phép hạng B1, B2 và FB2.', '3 – Mô tô hai bánh, các loại xe được quy định tại giấy phép lái xe hạng C có kéo rơ moóc, ô tô đầu kéo kéo sơ mi rơ moóc và được điều khiển các loại xe quy định cho giấy phép lái xe hạng B1, B2 và FB2.', '', 2, '0'),
(1, 71, 0, ' Người có giấy phép lái xe hang FE được điều khiển loại xe nào dưới đây?', '1 – Các loại xe được quy định tại giấy phép lái xe hạng E có kéo rơ moóc và đưuọc điều khiển các loại xe: Ô tô chở khách nối toa và các loại xe quy định cho giấy phép lái xe hạng B1, B2, C, D, FB2, FD.', '2 – Các loại xe được quy định tại giấy phép lái xe hạng E có kéo rơ mo óc, ô tô đầu kéo kéo sơ mi rơ mo óc và được điều khiển các loại xe: Ô tô chở khách nối toa và các loại xe quy định cho giấy phép lái xe hạng B1, B2, C, D, FB2, FD.', '3 – Tất cả các loại xe nêu trên.', '', 1, '0'),
(1, 72, 0, ' Biển báo hiệu có dạng hình tròn, viền đỏ, nền trắng, trên nền có hình vẽ dược chữ số, chữ viết màu đen là loại biển gì dưới đây?', '1 – Biển báo nguy hiểm.', '2 – Biển báo cấm.', '3 – Biển báo hiệu lệnh.', '4 – Biển báo chỉ dẫn.', 2, '72'),
(1, 73, 0, ' Biển báo hiệu có dạng hình tròn, viền đỏ, nền trắng trên nền có hình vẽ hoặc chữ số, chữ viết màu đen là loại biển gì dưới đây?', '1 – Biển báo nguy hiểm.', '2 – Biển báo cấm.', '3 – Biển báo hiệu lệnh.', '4 – Biển báo chỉ dẫn.', 1, '73'),
(1, 74, 0, ' Biển báo hiện hình tròn có nền xanh lam có hình vẽ màu trắng là loại gì dưới đây?', '1 – Biển báo nguy hiểm.', '2 – Biển báo cấm.', '3 – Biển báo hiệu lệnh phải thi hành.', '4 – Biển báo chỉ dẫn.', 3, '74'),
(1, 75, 0, ' Biển báo hiệu hình chữ nhật hoặc hình vuông hoặc hình mũi tên nền xanh lam là loại biển gì dưới đây?', '1 – Biển báo nguy hiểm.', '2 – Biển báo cấm.', '3 – Biển báo hiệu lệnh phải thi hành.', '4 – Biển báo chỉ dẫn.', 4, '75'),
(1, 76, 0, ' Khi tập lái xe ô tô, người tập lái xe phỉa thực hiện các điều kiện gì dưới đây?', '1 – Phải thực hành lái xe trên xe tập lái và có giáo viên bảo trợ tay lái.', '2 – Phải mang theo phù hiện “học viên tập lái xe”.', '3 – Phải mang theo giấy chứng nhận kiểm định an toàn kỹ thuật và bảo vệ môi trường còn hiệu lực, giấy phép vận chuyển (nếu các loại xe đó cần phải có).', '4 – Cả ý 1 và ý 2.', 4, '0'),
(1, 77, 0, ' Khi dạy thực hành lái xe, giáo viên phải mang theo các loại giấy tờ gì dưới đây?', '1 – Phải mang theo phù hiệu “giáo viên dạy lái xe”, giấy chứng nhận kiểm định an toàn kỹ thuật và bảo vệ môi trường còn hiệu lực, giấy phép xe tập lái do cơ quan có thẩm quyền cấp còn hiệu lực.', '2 – Phải mang theo phù hiệu “học viên tập lái xe” và kế hoạch học tập của khóa học.', '3 – Phải mang theo giấy chứng nhận giáo viên dạy thực hành lái xe, biên lai thu phí bảo trì đường bộ.', '', 1, '0'),
(1, 78, 0, ' Xe ô tô tập lái phải đảm bảo các điều kiện gì dưới đây?', '1 – Gắn 02 biển “TẬP LÁI” trước và sau xe, có hệ thống phanh phụ được lắp đặt bảo đảm hiệu quả nhanh, được bố trí trên ghế ngồi của giáo viên dạy thực hành lái xe.', '2 – Xe tập lái loại tải thùng có mui che mưa, che nắng, ghế ngồi cho học viên, có giấy chứng nhiện kiểm định an toàn kỹ thuật và bảo vệ môi trường phương tiện giao thông cơ giới đường bộ còn hiệu lực.', '3 – Cả ý 1 và ý 2.', '', 3, '0'),
(1, 79, 0, ' Việc sát hạch cấp giấy phép lái xe ô tô phải thực hiện ở đâu và như thế nào?', '1 – Tại các cơ sở đào tạo lái xe có đủ điều kiện và phải bảo đảm công, minh bạch.', '2 – Tại sân tập lái của cơ sở đào tạo ái xe và phải đảm bảo công khai, minh bạch.', '3 – Tại các trung tâm sát hạch lái xe có đủ điều kiện hoạt động và phải bảo đảm công khai, minh bạch.', '', 3, '0'),
(1, 80, 0, ' Khi điều khiển xe chạy trên đường, người lái xe phải mang theo các loại giấy từ gì?', '1 – Giấy chưng nhận tốt nghiệp khóa đào tạo của hạng xe đang điều khiển, đăng ký xe, giấy phép lưu hành xe.', '2 – Giấy phép lái xe phù hợp với loại xe đó; lệnh vận chuyển, đăng ký xe, giấy chứng nhận kiểm tra chất lượng an toàn kỹ thuật và bảo vệ môi trường của xe cơ giới sau khi cải tạo; giấy phép vận chuyển (nếu loại xe đó cần phải có).', '3 – Giấy phép lái xe phù hợp với loại xe đó, đăng ký xe, giấy chứng nhận kiểm định kỹ thuật và bảo vệ môi trường, giấy chứng nhận bảo hiểm trách nhiện dân sự của chủ xe cơ giới và giấy phép vận chuyển (nếu loại xe đó cần phải có), các giấy tờ phải còn giá trị sử dụng.', '', 3, '0'),
(1, 81, 0, '  Khi sử dụng giấy phép lái xe đã khai báo mất để điều khiển phương tiện cơ giới đường bộ, ngoài việc bị thu hồi giấy phép lái xe, chịu trách nhiệm trước pháp luật, người lái xe không được cấp giấy phép lái xe trong thời gian bao nhiêu năm?', '1 – 02 Năm.', '2 – 03 Năm.', '3 – 05 Năm.', '4 – 04 Năm.', 3, '0'),
(1, 82, 0, ' Khi gặp hiệu lệnh như dưới đây của cảnh sát giao thông thì người tham gia giao thông phải đi như thế nào là đúng quy tắc giao thông?', '1 – Người tham gia giao thông ở các hứng phải dừng lại.', '2 – Người tham gia giao thông ở các hướng được đi theo chiều gậy chỉ của cảnh sát giao thông.', '3 – Người tham gia giao thông ở phía trước và phía say người điều khiển được đi tất cả các hướng giao thông ở phía bên phải và phía bên trái người điều khiển phải dừng lại.', '4 – Người tham gia giao thong ở phía trước và phía sau người điều khiển phải dừng lại; giao thông ở phía bên phải và bên trái người điều khiển được đi tất cả các hướng.', 4, '82'),
(1, 83, 0, ' Khi gặp hiệu lệnh như dưới đây của cảnh sát giao thông thì người tham gia giao thông phải đi như thế nào là đúng quy tắc giao thông?', '1 – Người tham gia giao thông ở hướng đối diện cảnh sát giao thông được đi, các hướng khác cần phải dừng lại.', '2 – Người tham gia giao thông được rẽ phải theo chiều mũi tên màu xanh ở bục cảnh sát giao thông.', '3 – Người tham gia giao thông ở các hướng đều phải dừng lại trừ các xe đã ở trong khu vực giao nhau.', '4 – Người ở hướng đối diện cảnh sát giao thông phải dừng lại, các hướng khác được đi trong đó có bạn.', 3, '83'),
(1, 84, 1, ' Trên đường giao thông, khi hiệu lệnh của người điều khiển giao thông trí với hiệu kệnh của đèn hoặc biển báo hiệu thì người tham gia giao thông phải chấp hành theo hiệu lệnh nào?', '1 – Hiệu lệnh của người điều khiển giao thông.', '2 – Hiệu lệnh của đèn điều khiển giao thông.', '3 – Hiệu lệnh của biển báo hiệu đường bộ.', '4 – Theo quyết định của người tham gia giao thông nhưng phải bảo đảm an toàn.', 1, '0'),
(1, 85, 0, ' Tại nơi có biển báo hiệu cố định lại có báo hiệu tạm thời thì người tham gia giao thông phải chấp hành hiệu lệnh của báo hiệu nào?', '1 – Biển báo hiệu cố định.', '2 – Báo hiệu tạm thời.', '', '', 2, '0'),
(1, 86, 0, ' Trên đường có nhiều làn đường cho xe đi cùng chiều được phân biệt bằng vạch kẻ phân làn đường, người điều khiển phương tiện phải cho xe đi như thế nào?', '1 – Cho xe đi trên bất kỳ làn đường nào hoặc giữa 02 làn đường nếu không có xe phái trước; khi cần thiết phải chuyển làn đường, người lái xe phải quan sát xe phía trước để đảm bảo an toàn.', '2 – Phỉa cho xe đi trong làn đường và chỉ được chuyển làn đường ở những nơi cho phép; khi chuyển làn phải có tín hiệu báo trước và phải bảo đảm an toàn.', '3 – Phải cho xe đi trong một làn đường, khi cần thiết phải chuyển hướng làn đường, người lái xe phải quan sát xe phía trước để bảo đảm an toàn.', '', 2, '0'),
(1, 87, 0, ' Trên đường một chiều có vạch kẻ phân làn đường xe thô sơ và xe cơ giới phải đi như thế nào là đúng quy tắc giao thông?', '1 – Xe thô sơ phỉa đi trên làn đường bên trái ngoài cùng, xe cơ giới, xe máy chuyên dùng đi trên làn đường bên phải.', '2 – Xe thô sơ phải đi trên làn đường bên phải trong cùng; xe cơ giới, xe máy chuyên dùng đi trên làn đường bên trái.', '3 – Xe thoo sơ đi trên làn đường phù hợp không gây cản trở giao thông, xe cơ giới, xe máy chuyên dùng đi trên làn đường bên phải.', '', 2, '0'),
(1, 88, 0, ' Bạn đang lái xe trong khu vực đô thị từ 22 giờ đến 5 giờ sáng hôm sau và cần vượt một xe khác, bạn cần báo hiệu như thế nào để đảm bảo an toàn giao thông?', '1 – Phải báo hiệu bằng đèn hoặc còi.', '2 – Chỉ được báo hiệu bằng còi.', '3 – Phải báo hiệu bằng cả còi và đèn.', '4 – Chỉ được báo hiệu bằng đèn.', 4, '0'),
(1, 89, 0, ' Khi điều khển xe chạy trên đường biết có xe sau xin vượt nếu đủ điều kiện an toàn người lái xe phải làm gì?', '1 – Tăng tốc độ và ra hiệu cho xe sau vượt, không được gây trở ngại cho xe sau vượt.', '2 – Người điều khiển phương tiện phía trước phải giảm tốc độ, đi sát về bên phải của phần đường xe chạy cho đên skhi xe sau đã vượt qua, không được gây trở ngại cho xe sau vượt.', '3 – Cho xe tránh về bên trái mình và ra hiệu cho xe sau vượt; nếu có chướng ngại vật phía trước hoặc thiếu điều kiện cho xe sau biết; cấm gây trở ngại cho xe xin vượt.', '', 2, '0'),
(1, 90, 0, ' Trong khu dân cư, ở nơi nào cho phép người lái xe, người điều khiển xe máy chuyên dùng được quay đầy xe?', '1 – Ở nơi đường giao nhau và nơi có biển báo cho phép quay đầu xe.', '2 – Ở nơi có đường rộng để cho các loại xe chạy một chiều.', '3 – Ở bất kỳ nơi nào.', '', 1, '0'),
(1, 91, 1, ' Người lái xe phải làm gì khi quay đầu xe trên cầu, đường ngầm hay khu vực đường bộ giao nhau cùng mức với đường sắt?', '1 – Không được quay đầu xe.', '2 – Lợi dụng chỗ rộng và phải có người làm tín hiệu sau xe để đảm bảo an toàn.', '3 – Lợi dụng chỗ rộng có thể quay đầu được đẻ quay đầu xe cho an toàn.', '', 1, '0'),
(1, 92, 0, ' Khi muốn chuyển hướng, người lái xe phải thực hiện như thế nào để đảm bảo an toàn giao thông?', '1 – Quan sát gương, ra tín hiệu chuyển hướng, quan sát an toàn và chuyển hướng.', '2 – Quan sát giowng, giảm tốc độ, ra tín hiệu chuyển hướng, quan sát an toàn và chuyển hướng.', '3 – Quan sát gương, tăng tốc độ, ra tín hiệu và chuyển hướng.', '', 2, '0'),
(1, 93, 0, ' Khi lùi xe người lái xe phải làm gì để đảo bảo an toàn?', '1 – Quan sát phía trước và cho xe ở tốc độ chậm.', '2 – Lợi dụng nơi đường giao nhau đủ chiều rộng để lùi.', '3 – Phải quan sát phía sau, có tín hiệu cần thiết, và chỗ nào thấy không nguy hiểm mới được lùi.', '', 3, '0'),
(1, 94, 0, ' Khi bạn nhìn thấy đèn phía sau xe ô tô có mày sáng trắng, ô tô đó đang trong tình trạng như thế nào?', '1 – Đang phanh.', '2 – Đang bật đèn sương mù.', '3 – Đang chuẩn bị lùi hoặc đang lùi.', '4 – Đang bị hỏng động cơ.', 3, '0'),
(1, 95, 0, ' Khi tránh xe đi ngược chiều, các xe phải nhường đường như thế nào là đúng quy tắc giao thông?', '1 – Nơi đường hẹp chỉ đủ cho một xe chạy và có chỗ tránh xe thì xe nào ở gần chỗ tránh hơn phải vào vị trí tránh, nhường đường cho xe kia đi.', '2 – Xe xuống duocs phải nhường đường cho xe đang lên dốc; xe nào có chướng ngại vật phía trước phải nhường dường cho xe không có chướng ngại vật đi trước.', '3 – Xe lên dốc phải nhường đường cho xe xuống dốc; xe nào không có chướng ngại vật phía trước phải nhường đường cho xe có hướng ngại vật đi trước.', '4 – Cả ý 1 và ý 2.', 4, '0'),
(1, 96, 0, ' Bạn đang lái xe trên đường hẹp, xuống dốc và gặp một xe đang lên dốc, bạn cần làm gì?', '1 – Tiếp tục đi và xe lên dốc phải nhường đường cho mình.', '2 – Nhường đường cho xe lên dốc.', '3 – Chỉ nhường đường khi xe lên dốc nháy đèn.', '', 2, '0'),
(1, 97, 0, ' Tại nơi đường giao nhua, người lái xe đang đi trên đường không ưu tiên phải nhường đường như thế nào là đúng quy tắc giao thông?', '1 – Nhường đường cho xe đi ở bên phải mình tới.', '2 – Nhường đường cho xe đi ở bên trái mình tới.', '3 – Nhường đường cho xe đi trên đường ưu tiên hoặc đường chính từ bất kỳ hướng nào tới.', '', 3, '0'),
(1, 98, 0, ' Tại nơi đường giao nhau không có báo hiệu đi theo vòng xuyến, người điều khiển phương tiện phải nhường đường như thế nào là đúng quy tắc giao thông?', '1 – Phải nhường đường cho xe đi đến từ bên phải.', '2 – Xe báo hiệu xin đường trước xe đó được đi trước.', '3 – Phải nhường đường cho xe đi đến từ bên trái.', '', 1, '0'),
(1, 99, 1, ' Trên đoạn đường bộ giao nhau cùng mức với đường sắt, cầu đường bộ đi chung với đường sắt thì loại phương tiện nào được quyền ưu tiên đi trước?', '1 – Phương tiện nào bên phải không vướng.', '2 – Phương tiện nào ra tín hiệu xin đường trước.', '3 – Phương tiện giao thông đường sắt.', '', 3, '0'),
(1, 100, 0, ' Tại nơi đường bộ giao nhau cùng mức với đường sắt chỉ có đèn tín hiệu hoặc chuông báo hiệu, khi đèn tín hiệu màu đỏ đã bất sáng hoặc có tiếng chuông báo hiệu, người tham gia giao thông phải dừng ngay và giữ khoảng cách tối thiểu bao nhiêu mát tính từ ray gần nhất?', '1 – 5 mét.', '2 – 3 mét.', '3 – 4 mét.', '', 1, '0'),
(1, 101, 1, ' Người lái xe phải làm gì khi điều khiển xe vào đường cao tốc?', '1 – Phải có tín hiệu xin vào và phải nhường đường cho xe đang chạy trên đường; khi thấy an toàn mới chõ e nhập và dòng xe ở làn đường sát mép ngoaifl nếu có làn đường tăng tốc thì phải cho xe chạy trên làn đường đó trước khi vào làn đường của đường cao tốc.', '2 – Phải có tín hiệu xin vào và phải nhanh chóng vượt xe đang chạy trên đường để nhập vào dòng xe ở làn đường sát mèo ngoài; nếu có làn đường tăng tốc thì phải cho xe chạy qua làn đường đó để vòa làn đường của đường cao tốc.', '', '', 1, '0'),
(1, 102, 0, ' Trên đườngc ao tốc, người lái xe phải dừng xe, đỗ xe như thế nào để đảm bảo an toàn giao thông?', '1 – Không được dừng xe, đỗ xe hoặc chỉ được dừng xe, đỗ xe ở nơi đường rộng, nếu dừng, đỗ xe ở nơi đường hẹp phải sử dụng còi báo hiệu để người lái xe khác biết.', '2 – Chỉ được dừng xe, đỗ xe ở nơi quy định, trường hợp buộc phải dừng xe, đỗ xe không đúng nơi quy định thì người lái xe phải đưa xe ra khỏi phần đường xe chạy, nếu khoog thể được thì phải báo hiệu để người lái xe khác biết.', '3 – Chỉ được dừng xe, đỗ xe ở nơi đường rộng; trường hợp dừng xe, đỗ xe tại nơi đường hẹp phải đặt các chướng ngại vật trên đường để yêu cầu người lái xe khác giảm tốc độ để bảo đảm an toàn.', '', 2, '0'),
(1, 103, 0, ' Những trường hợp nào ghi ở dưới đây không được đi vào đường cao tốc trừ người, phương tiện, thiết bị phục vụ cho việc quản lý, bảo trì đường cao tốc?', '1 – Người đi bộ, xe thô sơ, xe gắn máy, xe mô tô và máy kéo; xe máy chuyên dùng có tốc độ thiết kể nhỏ hơn 70km/h.', '2 – Xe mô tô và xe máy chuyên dùng có tốc độ thiết kế lớn hơn 70km/h.', '3 – Người đi bộ, xe thô sơ, xe gắn máy và xe ô tô.', '', 1, '0'),
(1, 104, 0, ' Người điều khiển phương tiện tham giao thông trong hầm đường bộ ngoài việc phải tuân thủ các quy tắc giao thông còn phải thực hiện những quy định nào dưới đây?', '1 – Xe cơ giới, xe máy chuyên dùng phải bật đèn; xe thô sơ phải bật đèn hoặc có vật phát sáng báo hiệu; chỉ được dừng xe, đỗ xe ở nơi quy định.', '2 – Xe cơ giới phải bật đèn ngay cả khi đường hầm sáng; phải cho xe chạy trên một làn đường và chỉ chuyển làn ở được phép; được quy đầu xe, lùi xe khi cần thiết.', '3 – Xe máy chuyên dùng phải bật đèn ngay cả khi đường hầm sáng; phải cho xe chạy trên một làn đường và chỉ chuyển làn ở nơi được phép quay đầu xe, lui xe khi cần thiết.', '', 1, '0'),
(1, 105, 0, ' Xe quá tải trọng, quá khổ giới hạn tham gia giao thông cần tuân thủ quy định nào ghi dưới đây?', '1 – Phải được cơ quan quản lý đường bộ có thẩm quyền cấp phép và phải thực hiện các biện pháp bắt buộc để bảo vệ đường bộ, đảm bảo an toàn giao thông.', '2 – Chủ phương tiện và lái xe chỉ cần thực hiện biện pháp để hạn chế việc gây hư hại đường bộ.', '3 – Được tham gia giao thôn trên đường rộng.', '4 – Chỉ được tham gia giao thông vào ban đêm.', 1, '0'),
(1, 106, 0, ' Việc nối giữa xe kéo với xe được kéo trong trường hợp hệ thống hãm của xe được kéo không còn hiệu lực thì phải dùng cách nào?', '1 – Dùng dâu cáp có độ dài 10 mét.', '2 – Dùng dây cáp có độ dài 5 mét.', '3 – Dùng thanh nối cứng.', '', 3, '0'),
(1, 107, 0, ' Xe kéo rơ moóc khi thao gia giao thông phải tuân thủ điều kiện nào ghi ở dưới đây?', '1 – Phải có tổng trọng lượng lớn hơn tổng trọng lượng của rơ moóc hoặc phải có thệ thống hãm có hiệu lực cho rơ moóc.', '2 – Phải có tổng trọng lượng tương đương tổng trọng lượng rơ mo óc hoặc phải có thệ thống hãm có hiệu lực cho xe kéo rơ mo óc.', '3 – Phải được lắp phanh phụ theo quy định để đảm bảo an toàn.', '', 1, '0'),
(1, 108, 0, ' Xe ô tô kéo xe khác thế nào là đúng quy tắc giao thông?', '1 – Được kéo theo một xe ô tô hoặc xe máy chuyên dùng khác khi xe này không tự động chạy được và phải đảm bảo an toàn; xe được kéo phải có người điều khiển và hệ thống lái của xe đó phải còn hiệu lực; trường hợp hệ thống hã của xe được kéo không còn hiệu lực thì xe kéo phải nối bằng thanh nối cứng.', '2 – Được kéo theo một xe ô tô và xe máy chuyên dùng khác khi xe này không tự động chạy được và phải đảm bảo an toàn; xe được kéo phải có người ngồi trên xe để kịp thời phát hiện các trường hợp mất an toàn.', '3 – Được kéo theo một xe ô tô và xe máy chuyên dùng khác khi xe này không tự chạy được và hệ thống phanh bị hỏng, xe kéo nhau phải nối bằng dây cáp có độ dài phù hợp.', '', 1, '0'),
(1, 109, 1, ' Người ngồi trên e mô tô 2 bánh, xe gắn máy phải đội mũ bảo hiểm có quai đúng quy cách khi nào?', '1 – Khi tham gia giao thông đường bộ.', '2 – Chỉ khi đi trên đường chuyên dùng; đường cao tốc.', '3 – Khi tham gia giao thông trên đường tỉnh lộ hoặc quốc lộ.', '', 1, '0'),
(1, 110, 0, ' Người điều khiển xe mô tô hai bánh, xe gắn máy được phép chở tối đa 2 người trong trường hợp nào?', '1 – Chở người bệnh đi cấp cứu; trẻ em dưới 1 tuổi.', '2 – Áp giải người có hành vi vi phạm pháp luật.', '3 – Cả ý 1 và ý 2.', '', 3, '0'),
(1, 111, 0, ' Người điều khiển xe mô tô hai bánh, xe gắn máy không được thực hiện những hành vi nào dưới dây?', '1 – Đi vào phần đường dành cho người di bộ và phương tiện khác; sử dụn ô, điện thoại di động, thiết bị âm thanh (trừ thiết bị trợ thính), đi xe dàn hàng ngang.', '2 – Chở 02 người; trong đó, có người bệnh đi cấp cứu hoặc trẻ em dưới 14 tuổi hoặc áp giải người có hành vi vi phạm pháp luật.', '3 – Điều khiển phương tiện tham gia giao thông trên đường tỉnh lộ hoặc quốc lộ.', '', 1, '0'),
(1, 112, 1, ' Người điều khiển xe mô tô hai bánh, xe gắn máy có được đi xe dàn hàng ngang; đi xe vào phần đường dành cho người đi bộ và phương tiện khác; sử dụng ô, điện thoại di động, thiết bị âm thanh (trừ thiết bị trợ thính) hay không?', '1 – Được phép nhưng phảo đảm bảo an toàn.', '2 – Không được phép.', '3 – Được phép tùy từng hoàn cảnh, điều kiện cụ thể.', '', 2, '0'),
(1, 113, 0, ' Người lái xe phải giảm tốc độ thấp hơn tốc độ tối đa cho phép (có thể dừng lại một cách an toàn) trong trường hợp nào dưới đây?', '1 – Khi có báo hiệu cảnh báo nguy hiểm hoặc có chướng ngại vật trên đường; khi chuyển hướng xe chạy hoặc tầm nhìn bị hạn chế; khi qua nơi đường giao nhau, nơi đường bộ giao nhau với đường sắt; đường vòng; đường có địa hình quanh co, đèo dốc.', '2 – Khi qua cầu, cống hẹp; khi lên gần đỉnh gốc, dân cư, khu vực đang thi công trên đường bộ; hiện trường xảy ra tai nạn giao thông.', '3 – khi điều kheiern xe vượt xe khác trên đường quốc lộ, đường cao tốc.', '4 – Cả ý 1 và ý 2.', 4, '0'),
(1, 114, 1, ' Khi gặp một đoàn xe, một đoàn xe tang hay gặp một đoàn người có tổ chức theo đội ngữ, người lái xe phải xử lý như thế nào?', '1 – Từ từ đi cắt qua đoàn người, đoàn xe.', '2 – Không được cắt ngang qua đoàn người, đoàn xe.', '3 – Báo hiệu từ từ cho xe đi cắt qua đến bảo đảm an toàn.', '', 2, '0'),
(1, 115, 0, ' Tại ngã ba hoặc ngã tư không có đảm bảo an toàn, người lái xe phải nhường đường như thế nào là đúng trong các trường hợp dưới đây?', '1 – Nhường đường cho người đi bộ đang đi trên phần đường dành cho người đi bộ sang đường; nhường đường cho xe đi trên đường ưu tiên, đường chính từ bất kì hướng nào tới; nhường đường cho xe ưu tiên, xe đi từ bên phải đến.', '2 – Nhường đường cho người đi bộ đang đứng chờ đi qua phần đường dành cho người đi bộ sang đường; nhường đường cho xe đi trên đường ngược chiều, đường nhánh từ bất kỳ hướng nào tới; nhường đường cho xe đi từ bên trái đến.', '3 – Không phải nhường đường.', '', 1, '0'),
(1, 116, 0, ' Khi điều khển xe cơ giới người lái xe phải bật đèn tín hiệu rẽ nào trong các trườn hợp nào sau đây?', '1 – Khi cho xe chạy thắng.', '2 – Trước khi thay đổi làn đường.', '3 – Sau khi thay đổi làn đường.', '', 2, '0'),
(1, 117, 0, ' Trên đoạn đường hai chiều không có giải phân cách giữa, người lái xe không được vượt xe khác trong các trường hợp nào dưới đây?', '1 – Xe bị vượt bất ngờ tăng tốc độ và cố tình không nhường đường.', '2 – Xe bị vượt giảm tốc độ và nhường đường.', '3 – Phát hiện có xe đi ngược chiều.', '4 – Cả ý 1 và ý 3.', 4, '0'),
(1, 118, 1, ' Khi lái xe trên đường vắng mà cảm thấy buồn ngủ, người lái xe nên chọn cách xử lý như thế nào cho phù hợp?', '1 – Tăng tốc độ kết hợp với nghe nhạc và đi tiếp.', '2 – Quan sát và dừng xe tại nơi quy định; nghỉ cho đến khi hết buồn ngủ và đi tiếp.', '3 – Sử dụng một ít rượu hoặc bia để hết buồn ngủ và đi tiếp.', '', 2, '0'),
(1, 119, 1, ' Trên đường cao tốc, người lái xe xử lý như thế nào khi đã vượt quá lối ra của đường định rẽ?', '1 – Quay xe, chạy trên lề đường bên phải và rẽ khỏi đường cao tốc.', '2 – Lùi xe sát lề đường bên phải và rẽ khỏi đường cao tốc.', '3 – Tiếp tục chạy đến lối rẽ tiếp theo.', '', 3, '0'),
(1, 120, 0, ' Người lái xe mô tô xử lý như thế nòa khi cho xe mô tô phía sau vượt?', '1 – Nếu đủ điều khiện an toàn, người lái xe phải giảm tốc độ, đi sát về bên phải của phần đường xe chạy cho đến khi xe sau đã vượt qua, không được gây trỏ ngại đối với xe xin vượt.', '2 – Lái xe vào lề đường bên trái và giảm tốc độ để xe phía sau vượt qua, không được gây trỏ ngại đối với xe xin vượt.', '3 – Nếu đủ điều kiện an toàn, người lái xe phải tăng tốc độ, đi sát về bên phải của phần đường xe chạy cho đến khi xe sau đã vượt qua.', '', 1, '0'),
(1, 121, 0, ' Khi xe ô tô bị hỏng tại vị trí giao nhau giữa đường bộ và đường sắt, người lái xe xử lý như thế nào?', '1 – Nhanh chóng đặt báo hiệu trên đường sắt cách tối thiểu 500 mét về hai phía để báo cho người điều khiển phương tiện đường sắt và tìm cách báo cho người quản lý đường sắt, nhà ga nơi gần nhất, đồng thơi phải bằng mọi biện pháp nhanh chóng đưa ô tô hỏng ra khỏi phạm vi an toàn đường sắt.', '2 – Nhanh chóng đặt biển cảnh báo nguy hiểm tại vị trí xe ô tô bị hỏng để đoàn tàu dừng lại.', '3 – Liên hệ ngay với đơn vị cứu hộ để đưa ô tô hỏng ra khỏi phạm vi an toàn đường sắt.', '', 1, '0'),
(1, 122, 0, ' Trong các trường hợp dưới đây, để đảo bảo an toàn khi tham gia giao thông, người lái xe mô tô cần thực hiện như thế nào?', '1 – Phải đội mũ bảo hiểm đạt chuẩn, có cài quai đúng quy cách, mặc quần áo gọn gang; không sử dụng ô, điện thoại di động, thiết bị âm thanh (trừ thiết bị trợ thính).', '2 – Phải đội mũ bảo hiểm khi trời mưa gió hoặc trời quá nắng; có thể sử dụng ô, điện thoại di động thiết bị âm thanh nhưng đảm bảo an toàn.', '3 – Phải đội mũ bảo hiểm khi cảm thấy mất an toàn giao thông hoặc khi chuẩn bị di chuyển quãng đường xa.', '', 1, '0'),
(1, 123, 0, ' Đường bộ trong khu vực đông dân cư gồm những đoạn đường nào dưới đây?', '1 – Là đoạn đường nằm trong khu công nghiệp có đông người và phương tiện tham gia giao thông và được xác định cụ thể bằng biển chỉ dẫn địa giới.', '2 – Là đoạn đường bộ nằm trong khu vực nội thành phố, nội thị xã, nội thị trấn và những đoạn đường có dân cư sinh sống sát dọc theo đường, có các loại hoạt động có thể ảnh hưởng đến giao thông đường bộ và được xác định bằng biển báo là đường qua khu đông dân cư.', '3 – Là đoạn đường nằm ngoài khu vực nội thành phố, nội thị xã có đông người và phương tiện tham gia giao thông và được xác định cụ thể bằng biển chỉ dẫn địa giới.', '', 2, '0'),
(1, 124, 0, ' Tốc độ tối đa cho phép đối với xe máy chuyên dùng, xe gắn máy (kể cả xe máy điện) và các loại xe tương tự trên đường bộ (trừ đường cao tốc) không được vượt quá bao nhiêu km/h?', '1 – 50 km/h.', '2 – 40 km/h.', '3 – 60 km/h.', '', 2, '0'),
(1, 125, 0, ' Trên đường bộ (trừ đường cao tốc) trong khu vực đông dân cư, đường đôi có dải phân cách giữa, xe mô tô hai bánh, ô tô chở người đến 30 chỗ tham gia giao thông với tốc độ tối đa cho phép là bao nhiêu?', '1 – 60 Km/h.', '2 – 50 Km/h.', '3 – 40 Km/h.', '', 1, '0'),
(1, 126, 0, ' Trên đường bộ (trừ đường cao tốc) trong khu vực đông dân cư, đường hai chiều không có dải phân cách giữa, xe mô tô hai bánh, ô tô chở người đến 30 chỗ tham gia giao thông với tốc độ tối đa cho phép là bao nhiêu?', '1 – 60 Km/h.', '2 – 50 Km/h.', '3 – 40 Km/h.', '', 2, '0'),
(1, 127, 0, ' Trên đường bộ (trừ đường cao tốc) trong khu vực đông dân cư, đường hai chiều hoặc đường một chiều có một làn xe cơ giới, loại xe nào tham gia giao thông được đi với tốc độ tối đa cho phép là 50 km/h?', '1 – Ô tô con, ô tô tải, ô tô chở người trên 30 chỗ.', '2 – Xe gắn máy, xe máy chuyên dùng.', '3 – Cả ý 1 và ý 2.', '', 1, '0'),
(1, 128, 0, ' Trên đường bộ (trừ đường cao tốc) trong khu vực đông dân cư, đường đôi hoặc đường một chiều có từ hai làn xe cơ giới trở lên, loại xe nào tham gia giao thông với tốc độ tối đa cho phép là 60km/h?', '1 – Ô tô con, ô tô tải, ô tô chở người trên 30 chỗ.', '2 – Xe gắn máy, xe máy chuyên dùng.', '3 – Cả ý 1 và ý 2.', '', 1, '0'),
(1, 129, 0, ' Trên đường bộ (trừ đường cao tốc) ngoài khu vực đông dân cư, đường đôi có giải phân cách giữa, loại xe nào được tham gia giao thông với tốc độ tối đa cho phép là 90 km/h?', '1 – Ô tô chở người trên 30 chỗ (trừ ô tô buýt), ô tô tải có trọng tải trên 3500 kg.', '2 – Xe ô tô con, xe ô tô chở người đến 30 chỗ(trừ ô tô buýt), ô tô tải có trọng lượng đến 3500 kg.', '3 – Ô tô buýt, ô tô đầu kéo, kéo sơ mi rơ moóc, ô to chuyên dùng, xe mô tô.', '', 2, '0'),
(1, 130, 0, ' Trên đường bộ ngoài khu vực đông dân cư, đường đôi có dải phân cách giữa (trừ đường cao tốc), loại xe nào tham gia giao thông với tốc độ tối đa cho phép là 80 km/h?', '1 – Ô tô buýt, ô tô đầu kéo, kéo sơ mi rơ moóc, ô to chuyên dùng, xe mô tô.', '2 – Ô tô chở người trên 30 chỗ (trừ ô tô buýt), ô tô tải có trọng tải trên 3500 kg (trừ ô tô xi téc).', '3 – Ô tô kéo rơ mo óc, ô tô kéo xe khác, xe gắn máy.', '4 – Xe ô tô con, xe ô tô chở người đến 30 chỗ (trừ ô tô buýt), ô tô tải có trọng tải đến 3500 kg.', 2, '0'),
(1, 131, 0, ' Trên đường bộ ngoài khu vực đông dân cư, đường đôi có dải phân cách giữa (trừ đường cao tốc), loại xe nào tham gia giao thông với tốc độ tối đa cho phép là 70 km/h?', '1 – Ô tô buýt, ô tô đầu kéo, kéo sơ mi rơ moóc, ô to chuyên dùng (trừ ô tô trộn vữa, ô tô trộn bê tông), xe mô tô.', '2 – Ô  tô kéo rơ mo óc, ô tô kéo xe khác, xe gắn máy.', '3 – Ô tô chở người trên 30 chỗ (trừ ô tô buýt), ô tô tải có trọng tải trên 3.', '500 kg.', 1, '0'),
(1, 132, 0, ' Trên đường bộ ngoài khu vực đông dân cư, đường đôi có dải phân cách giữa (trừ đường cao tốc), loại xe nào tham gia giao thông với tốc độ tối đa cho phép là 60 km/h?', '1 – Ô tô kéo rơ moóc, ô tô kéo xe khác, ô tô trộn vữa, ô tô trộn bê tông, ô tô xi téc.', '2 – Ô tô chở người trên 30 chỗ (trừ ô tô buýt) ô tô tải có trọng lựng tải lên đến 3500 kg.', '3 – Xe ô tô con, xe ô tô chở người đến 30 chỗ (trừ xe buýt), ô tô tải có trọng tải nhỏ hơn hoặc bằng 3.', '500kg.', 1, '0');
INSERT INTO `600_cau_hoi` (`chuong`, `cau`, `cau_diem_liet`, `cauhoi`, `dapan1`, `dapan2`, `dapan3`, `dapan4`, `dapandung`, `img`) VALUES
(1, 133, 0, ' Trên đường bộ ngoài khu vực đông dân cư, đường hai chiều không có dải phân cách giữa; đường một chiều có một làn xe cơ giới (trừ đường cao tốc), loại xe nào tham gia giao thông vơi tốc độ tối đa cho phép là 80 km/h?', '1 – Ô tô kéo rơ mo óc, ô tô kéo xe khác, xe gắn máy.', '2 – Ô tô chở người trên 30 chỗ (trừ ô tô buýt), ô tô tải có trọng tải trên 3500kg.', '3 – Xe ô tô con, xe ô tô chở người đến 30 chỗ (trừ xe buýt), ô tô có trọng tải nhỏ hơn hoặc bằng 3.', '500kg.', 3, '0'),
(1, 134, 0, ' Trên đường bộ ngoài khu vực đông dân cư, đường hai chiều không có dải phân cách giữa; đường một chiều có một làn xe cơ giới (trừ đường cao tốc), loại xe nào tham gia giao thông vơi tốc độ tối đa cho phép là 70 km/h?', '1 – Ô tô kéo rơ mo óc, ô tô kéo xe khác, xe gắn máy.', '2 – Ô tô chở người trên 30 chỗ (trừ ô tô buýt), ô tô tải có trọng tải trên 3500 kg (trừ ô tô xi téc).', '3 – Xe ô tô con, xe ô tô chở người đến 30 chỗ (trừ xe buýt), ô tô tải có trọng tải nhỏ hơn hoặc bằng 3500kg.', '', 2, '0'),
(1, 135, 0, ' Trên đường bộ ngoài khu vực đông dân cư, đường hai chiều không có dải phân cách giữa; đường một chiều có một làn xe cơ giới (trừ đường cao tốc), loại xe nào tham gia giao thông vơi tốc độ tối đa cho phép là 60 km/h?', '1 – Ô tô kéo rơ mo óc, ô tô kéo xe khác, xe gắn máy.', '2 – Ô tô chở người trên 30 chỗ (trừ ô tô buýt), ô tô tải có trọng tải trên 3500kg.', '3 – Ô tô buýt, ô tô đầu kéo kéo sơ mi rơ moóc, xe mô tô, ô tô chuyên dùng (trừ ô tô trộn vữa, ô tô trộn bê tông).', '', 3, '0'),
(1, 136, 0, ' Trên đường bộ ngoài khu vực đông dân cư, đường hai chiều không có dải phân cách giữa; đường một chiều có một làn xe cơ giới (trừ đường cao tốc), loại xe nào tham gia giao thông vơi tốc độ tối đa cho phép là 50 km/h?', '1 – Ô tô kéo rơ mo óc, ô tô kéo xe khác, xe gắn máy.', '2 – Ô tô chở người trên 30 chỗ (trừ ô tô buýt), ô tô tải có trọng tải trên 3500kg.', '3 – Ô tô kéo rơ moóc, ô tô kéo xe khác, ô tô trộn vữa, ô tô trộn bê tông, ô tô xi téc.', '', 3, '0'),
(1, 137, 0, ' Khi tham gia giao thông trên đoạn đường không có biển báo “cự ly tối thiểu giữa hai xe”, với điều kiện mặt đường khô ráo, xe cơ giới đang chạy với tốc độ từ trên 60km/h đến 80km/h, người lái xe phải duy trì ở khoảng cách an toàn với xe đang chạy phía trước tối thiểu là bao nhêu met?', '1 – 30 mét.', '2 – 55 mét.', '3 – 70 mét.', '', 2, '0'),
(1, 138, 0, ' Khi tham gia giao thông trên đoạn đường không có biển báo “cự ly tối thiểu giữa hai xe”, với điều kiện mặt đường khô ráo, xe cơ giới đang chạy với tốc độ từ trên 80km/h đến 100km/h, người lái xe phải duy trì ở khoảng cách an toàn với xe đang chạy phía trước tối thiểu là bao nhêu met?', '1 – 30 mét.', '2 – 55 mét.', '3 – 70 mét.', '', 3, '0'),
(1, 139, 0, ' Khi tham gia giao thông trên đoạn đường không có biển báo “cự ly tối thiểu giữa hai xe”, với điều kiện mặt đường khô ráo, xe cơ giới đang chạy với tốc độ từ trên 100km/h đến 120km/h, người lái xe phải duy trì ở khoảng cách an toàn với xe đang chạy phía trước tối thiểu là bao nhêu met?', '1 – 55 mét.', '2 – 70 mét.', '3 – 100 mét.', '', 3, '0'),
(1, 140, 0, ' Khi điêu khiển xe chạy với tốc độ 60km/h người lái xe phải chủ động điều khiển xe như thế nào để đảo bảo an toàn giao thông?', '1 – Chủ động giữa khoảng cách an toàn phù hợp với xe chạy liền tước xe của mình.', '2 – Đảm bảo khoảng cách an toàn theo mật độ phương tiện, tình hình giao thông thực tế.', '3 – Cả ý 1 và ý 2.', '', 3, '0'),
(1, 141, 0, ' Người lái xe phải giảm tốc độ thấp hơn tốc độ đến mức cần thiết, chú ý quan sát và chuẩn bị sằn sàng những tình huống có thể xảy ra để phòng ngừa tai nạn trong các trường hợp nào dưới đây?', '1 – Gặp biển báo nguy hiển trên đường.', '2 – Gặp biển chỉ dần trên đường.', '3 – Gặp biển báo hết mọi lệnh cấm.', '4 – Gặp biển báo hết hạn chế tốc độ tối đa cho phép.', 1, '0'),
(1, 142, 0, ' Người lái xe phải giảm tốc độ, đi sát về bên phải của phần đường xe chạy trong các trường hợp nào dưới đây?', '1 – Khi vượt xe khác.', '2 – Khi vượt xe khác tại đoạn đường được phép vượt.', '3 – Khi xe sau xin vượt và đảm bảo an toàn.', '4 – Khi xe sau có tín hiệu vượt bên phải.', 3, '0'),
(1, 143, 1, ' Tại các điểm giao cắt giữa đườn bộ và đường sắt, quyền ưu tiên thuộc về loại phương tiện nào dưới đây?', '1 – Xe cứu hỏa.', '2 – Xe cứu thương.', '3 – Phương tiện giao thông đường sắt.', '4 – Ô tô, mô tô và xe máy chuyên dùng.', 3, '0'),
(1, 144, 0, ' Các phương tiện tham gia giao thông đường bộ (kể cả những xe có quyền ưu tiên) đều phải dừng lại bên phải đường của mình và trước vạch “dừng xe” tại các địa điểm giao cắt giữa đường bộ và đường sắt khi có báo hiệu dừng nào dưới đây?', '1 – Hiệu lệnh của nhân viên gác chắn.', '2 – Đèn đỏ sáng cháy, cơ đỏ, biển đỏ.', '3 – Còi, chuông kêu, chắn đã đóng.', '4 – Tất cả các ý trên.', 4, '0'),
(1, 145, 1, ' Trên đoạn đường bộ giao thông nhau đồng mức với đướng sắt, người không có nhiệm vụ có được tự ý mở chắn đường ngang khi chắn đã được đóng hay không?', '1 – Không được phép.', '2 – Được phép nhưng phải đảm bảo an taonf.', '3 – Được phép tùy từng hoàn cảnh và điều kiện cụ thể.', '', 1, '0'),
(1, 146, 0, ' Tác dụng của mũ bảo hiểm đối với người ngồi trên xe mô tô hai bánh trong trường hợp xảy ra tai nạn giao thông là gì?', '1 – Để làm đẹp.', '2 – Để tránh mưa nắng.', '3 – Để giảm thiểu chấn thương vùng đầu.', '4 – Để các loại phương tiện khác dễ quan sát.', 3, '0'),
(1, 147, 1, ' Khi điểu khiển phương tiện tham gia giao thông, những hành vi nào dưới đây bị nghiêm cấm?', '1 – Thay đổi tốc độ của xe trên đường bộ.', '2 – Thay đổi tay số của xe trên đường bộ.', '3 – Lạng lách, dánh võng trên đường bộ.', '', 3, '0'),
(1, 148, 0, ' Người lái xe phải nhanh chóng giảm tốc độ, tránh hoặc dừng lại sát lề đường bên phải để nhưỡng đường cho các xe nào nêu dưới đây?', '1 – Xe chữa cháy, xe quân sự, xe công an, xe cứu thương, xe hộ đê sau khi thực hiện nhiệm vụ khẩn cấp, không có tín hiệu còi, cờ, đèn theo quy định của phép luật.', '2 – Xe chữa cháy, xe quân sự, xe công an, xe cứu thương, xe hộ đe đi làm nhiệm vụ khẩn cấp có tín hiệu còi, cơ, đèn theo quy định của pháp luật.', '3 – Xe ô tô, xe máy, đoàn xe đang diễu hành có tổ chức có báo hiệu xin vượt bằng còi và đèn.', '', 2, '0'),
(1, 149, 0, ' Tại nơi đường giao nhua, người lái xe đang đi trên đường không tưu tiên phải xử lý nhưt hế nào là đúng quy tắt giao thông?', '1 – Tăng tốc độ qua đường giao nhau để đi trước xe đi trên đường ưu tiên.', '2 – Giảm tốc độ qua đường giao nhau để đi trước xe đi trên đường ưu tiên.', '3 – Nhường đường cho xe đi trên đường ưu tiên từ bất kỳ hướng nào tới.', '', 3, '0'),
(1, 150, 1, ' Khi xe ô tô, mô tô đến gần vị trí giao nhau giữa đường bộ và đường sắt không có rào chắn, khi đèn tín hiệu màu đỏ đã bật sáng hoặc khi có tiếng chuông báo hiệu, người lái xe xử lý như thế nào?', '?1 – Giảm tốc độ cho xe vượt qua đường sắt.', '2 – Nhanh chóng cho xe vượt qua đường sắt trước khi tàu hỏa tới.', '3 – Giảm tốc độ cho xe vượt qua đường sắt trước khi tàu hỏa tới.', '4 – Cho xe dừng ngay lại và giữ khoảng cách tối thiểu 5 mắt tính từ ray gần nhất.', 4, '0'),
(1, 151, 0, ' Khi điều khiển xe trên đường vòng, khuất tầm nhìn người lái xe cần phải làm gì để đảm bảo an toàn?', '1 – Đi đúng làn đường, đúng tốc độ quy định không được vượt xe khác.', '2 – Đi sang làn đường của xe người chiều để mở rộng tầm nhìn và vượ xe khác.', '3 – Cho xe đi sát bên phải làn đường, bật tín hiệu báo hiệu để bượt bên phải xe khác.', '', 1, '0'),
(1, 152, 0, ' Người lái xe phải xử lý như thế nào khi quan sát phía trước thấy người đi bộ đang sang đường tại nơi có vạch đường dành cho người đi bộ để đảm bảo an toàn?', '1 – Giảm tốc độ, đi từ từ để vượt qua trước người đi bộ.', '2 – Giảm tốc độ, có thể dừng lại nếu cần thiết trước vạch dừng xe để nhường đường cho người đi bộ qua đường.', '3 – Tăng tốc độ để vượt qua trước người đi bộ.', '', 2, '0'),
(1, 153, 1, ' Khi muốn lùi xe nhưng không quan sát được phía sau, cần phải làm gì để đảm bảo an toàn?', '1 – Phải lùi thật chậm.', '2 – Có thể được đi lùi xe nhưng phải mở cửa xe.', '3 – Không được lùi xe.', '', 3, '0'),
(1, 154, 1, ' Người điều khiển phương tiện giao thông tham gia giao thông đường bộ phải giảm tốc độ để có thể dừng lại một cách an toàn trong các trường hợp nào dưới đây?', '1 – Khi có người đi bộ, xe lăn của người khuyết tật qua đường; đến gần bến xe buýt, điểm dừng đỗ xe cso khách đang lên, xuống xe.', '2 – Khi điều khiển phương tiện đi qua khu vực trạm kiểm soát tải trọng xe, trạm cảnh sát giao thông, trạm giao dịch thanh toán đối với các phươn tiện sử dụng đường bộ.', '3 – Cả ý 1 và ý 2.', '', 3, '0'),
(1, 155, 0, ' Tại những đoạn đường không bố trí biển báo hạn chế tốc độ, không bố trí biển báo khoảng cacshb an toàn tối thiểu giữa hai xe, người điều khiển phương tiện tham gia gaio thông phải thực hiện quy định nào dưới đây để đảm bảo an toàn giao thông?', '1 – Người điều khiển phương tiện tham gia giao thông không hạn ché tốc độv à khoảng cách an toàn tối thiểu giữa hai xe.', '2 – Người điều khiển phương tiện tham gia giao thông không hạn chế tốc độ và khonarg cách an toàn tối thiểu giữa hai xe vào ban đêm.', '3 – Người điều khiển phương tiện tham gia giao thông phải nghiêm chỉnh chấp hàng quy định về tốc độ, khoảng cách an toàn tối thiểu giữa hai xe.', '', 3, '0'),
(1, 156, 0, ' Khi tham gia giao thông trên đường cao tốc, người lái xe, người điều khiển xe máy chuyên dùng phải thực hiện các quy định như thế nào là đúng quy tắc giao thông?', '1 – Tuân thủ tốc độ tối đa, tốc độ tối thiểu ghi trên biển báo hiệu đường bộ, sơn kẻ mặt đường trên các làn xe.', '2 – Tuân thủ tốc độ tối đa, tốc độ tối thiểu ghi trên biển báo hiệu đường bộ, sơn kẻ mặt đường trên các làn xe chỉ vào ban ngày.', '3 – Tuân thủ tốc độ tối đa, tốc độ tối thiểu ghi trên biển báo hiệu đường bộ, sơn kẻ mặt đường trên các làn xe chỉ vào ban đem.', '', 1, '0'),
(1, 157, 0, ' Theo luật giao thông đường bộ, tín hiệu đèn giao thông gồm 3 màu nào dưới đây?', '1 – Đỏ – Vàng – Xanh.', '2 – Cam – Vàng – Xanh.', '3 – Vàng – Xanh dương – Xanh lá.', '4 – Đỏ – Cam – Xanh.', 1, '0'),
(1, 158, 0, ' Tại nơi đườn giao nhau, khi đèn điều khiển giao thông có tín hiệu màu vàng, người điều khiển phương tiện giao thông phải chấp hành như thế nào là đúng quy tắc giao thông?', '1 – Phải cho xe dừng lại trước vạch dừng, trường hợp đã đi quá vạch dừng hoặc đã quá gần vạch dừng nếu lại thấy nguy hiểm thi được đi tiếp.', '2 – Trong trường hợp tín hiệu vàng nhấp nháy là được đi nhưng phải giảm tốc độ, chú ý quan sát nhường đường cho người đi bộ qua đừog.', '3 – Nhanh chóng tăng tốc độ, vượt qua nút giao và chú ý đảm bảo an toàn.', '4 – Cả ý 1 và ý 2.', 4, '0'),
(1, 159, 0, ' Để báo hiệu cho xe phía trước biết x emo tô của bạn muốn vượt, bạn phải có tín hiệu nào dưới đây?', '1 – Ra hiệu bằng tay rồi cho xe vượt qua.', '2 – Tăng ga mạnh để gây sự chú ý rồi cho xe vượt qua.', '3 – Bạn phải có báo hiệu bằng đèn hoặc còi.', '', 3, '0'),
(1, 160, 0, ' Khi tham gia giao thông trên đường coa tốc, người điều khiển phương tiện cơ giới có đường dừng, đỗ xe trên phần đường xe chạy hay không?', '1 – Được dừng, đỗ.', '2 – Không được dừng, đỗ.', '3 – Được dùng, đỗ nhưng phải đảm bảo an toàn.', '', 2, '0'),
(1, 161, 1, ' Khi xe gặp sự cố khỹ thuật trên đường cao tốc, bạn phải xử lý theo thứ tự như thế nào dưới đây để đảm bảo an toàn giao thông?', '1 – Bật đèn tín hiệu khẩn cấp, dừng xe ngay lập tức và đặt biển báo hiệu nguy hiểm để cảnh báo cho các xe khác.', '2 – Bật đèn tín hiệu khẩn cấp, lập tức đưa xe vào làn đường xe chạy bên phải trong cùng, đặt biển báo hiệu nguy hiểm để cảnh báo cho các xe khác.', '3 – Bật đèn tín hiệu khẩn cấp, khi đủ điều kiện an toàn nhanh chóng đưa xe vào làn dừng đỗ khẩn cấp , đặt hiển báo hiệu nguy hiểu để cảnh báo cho các xe khác.', '', 3, '0'),
(1, 162, 0, ' Khi người lái xe ô tô dừng, đỗ sát theo lề đường, hè phố phía bên phải theo chiều đi của mình, bánh xe gần nhất không được cách va lề đường, hè phố qua bao nhiêu mét trong các trường hợp dưới đây để không gây cản trở, nguy hiểm cho giao thông?', '1 – 0.', '25 mét.', '2 – 0.', '3 mét.', 1, '0'),
(1, 163, 0, ' Khi dừng, đỗ xe trên đường phố hẹp, người lái xe ô tô phải dừng, đỗ xe ở vị trí cách xe ô tô đang đỗ bên kia đường khoảng cách tối thiểu là bao nhiêu mét trong các trường hợp dưới đây để đảm bảo an toàn giao thông?', '1 – 5 Mét.', '2 – 10 mét.', '3 – 15 mét.', '4 – 20 mét.', 4, '0'),
(1, 164, 0, ' Trên đường bộ, người lái xe ô tô có được phép dừng xe, đỗ xe song song với một xe khác đang dừng, đỗ hay không?', '1 – Được phép.', '2 – Không được phép.', '3 – Chỉ được phép dừng, đỗ khi đừng vắng.', '', 2, '0'),
(1, 165, 0, ' Người điều khiển xe mô tô phải giảm tốc độ và hết sức thận trọng khi qua những đoạn đường nào dưới đây?', '1 – Đường ướt, đường có sỏi cát trên nền đường.', '2 –Đường hẹp có nhiều điểm giao cắt từ hai phía.', '3 – Đừng đèo dốc, vòng liên tục.', '4 – Tất cả các ý nêu trên.', 4, '0'),
(1, 166, 0, ' Khi gặp xe buýt đang đừng đón, trả khách, người điều khiển xe mô tô phải xử lý như thế nào dưới đây để đảm bảo an toàn giao thông?', '1 – Tăng tốc độ nhanh chóng vượt qua bên đỗ.', '2 – Giảm tốc độ đến mức an toàn có thể và quan sát người qua đừng và từ từ vượt qua xe buýt.', '3 – Yêu cầu phải dừng lại phía sau xe buýt chờ xe rời bến mới đi tiếp được.', '', 2, '0'),
(2, 167, 0, ' Người lái xe khách, xe buýt cần thực hiện những nhiệm vụ gì dưới đây?', '1 – Luôn có ý thức về tính tổ chức, kỷ luật, thực hiện nghiêm biểu đồ xe chạy được phân công; thực hiện đúng hành trình, lịch trình, đón trả khách đúng nơi quy định; giúp đỡ khách hàng khi đi xe, đặc biệt là những người khuyết tật, người gia, trẻ em và phụ nữ có thai, có con nhỏ.', '2 – Luôn có ý thức về tính tổ chức, kỷ luật , thực hiện linh hoạt biểu đồ xe chạy được phân caoong để tiết kiệm chi phí; thực hiện đúng hành trình, lịc trình khi có khách di xe, đón trả khách ở những nơi thuận tiện cho hành khách đi xe.', '', '', 1, '0'),
(2, 168, 0, ' Trong hoạt động vận tải đường bộ, các hành vi nào sau đây bị nghiêm cấm?', '1 – Vận chuyển hàng nguy hiểm nhưng có giấy phép.', '2 – Vận chuyển động vật hoang dã nhưng thực hiện đủ các quy định có liên quan.', '3 – Vận chuyển hàng cấm lưu thông; vận chuyển trái phép hàng nguy hiểm, động vật hoang dã.', '', 3, '0'),
(2, 169, 0, ' Trong hoạt động vận tải khách những hàng vi nào dưới đây bị nghiêm cấm?', '1 – Cạnh tranh nhua nhằm tăng lợi nhuận.', '2 – Giảm giá để thu hút khách hàng.', '3 – Đe dọa, xúc phạm, tranh giành, lôi kéo khách; bắt ép hành khách sử dụng dịch vụ ngoài ý muốn; xuống khách nhằm trốn tránh phát hiện xe chở quá số người quy định.', '', 3, '0'),
(2, 170, 0, ' Thời gian làm việc của người lái xe ô tô không được lái xe liên tục quá bao nhiêu giờ trong trường hợp dưới dây?', '1 – Không quá 4 giờ.', '2 – Không quá 6 giờ.', '3 – Không quá 8 giờ.', '4 – Liên tục tùy thuộc vào khả năng và sức khỏe của người lái xe.', 1, '0'),
(2, 171, 0, ' Thời gain làm việc trong một ngày của người lái xe ô tô không vượt quá bao nhiêu giờ trong trường hợp nào dưới đây?', '1 – Không quá 8 giờ.', '2 – Không quá 10 giờ.', '.', '4 – Không hạn chế tùy thuộc vào sức khỏe và khả năng của người lái xe.', 2, '0'),
(2, 172, 0, ' Người lái xe khách phải chấp hành những quy định nào dưới đây?', '1 – Đón, trả khách đúng nơi quy định, không chở hành khác trên mui, trong khoang hành lý hoặc để hành khách đu bám bên ngoài xe.', '2 – Không chở hàng nguy hiểm, hành có mùi hôi thối hoặc dodogj vật, hàng hóa khách có ảnh hưởng đến sức khẻo của hành khách.', '3 – Chở hành khách trên mui; để hàng hóa tỏng khoang chở khách, chở quá số người theo quy định.', '4 – Cả ý 1 và ý 2.', 4, '0'),
(2, 173, 0, ' Lái xe kinh doanh vận tải phải có trách nhiệm gì sau đây?', '1 – Kiểm tra các điều kiện bảo đảm an toàn của xe trước khi khởi hành; kiểm tra việc sắp xếp, chằng buộc hành lý, hàng hóa bảo đảm an toàn.', '2 – Đóng cửa lên xuống của xe trước vá trong khi xe chạy.', '3 – Đón trả khách tại vị trí do khách hàng yêu cầu.', '4 – Cả ý 1 và ý 2.', 4, '0'),
(2, 174, 0, ' Người kinh doanh vận tải hành khách có những quyền hạn nào dưới đây?', '1 – Tự ý thay đổi vị trí đón, trả khách theo hợp đồng vận chuyển hoặc đón thêm người ngoài danh sách khách đã đăng ký.', '2 – Từ chối vận chuyển trước khi phương tiện rời bến, rời vị trí đón trả khách theo hợp đồng vận chuyển những người đã có vé hoặc người trong danh sách hợp đồng có hành vi gây rối trật tự công cộng, gây cản trở công việc kinh doanh vận tải, ảnh hưởng đến sức khỏe, tài sản của người khác, gian lận vé hoặc hành khách đang bị dịch bệnh nguy hiểm.', '3 – Cả ý 1 và ý 2.', '', 2, '0'),
(2, 175, 0, ' Hành khách có các quyền gì khi đi trên xe ô tô vận tải khách theo tuyến cố định?', '1 – Được vận chuyển theo đúng hợp đồng vận tải, cam kết của người kinh doanh về chất lượng vận tải; được miễn cước hành lý với trọng lượng không quá 20 kg với kích thước phù hợp của xe; được từ chối chuyến đi trước khi phương tiện khởi hành và được trả lại tiền vé theo quy định của bộ giao thông vận tải.', '2 – Được vận chuyển theo hợp đồng vận tải, cam kết của người kinh doanh vận tải; ddowcj miễn cước hành lý với trọng lượng không quá 50 kg và ới kích thước không quá cồng kềnh; đươc từ chối chuyến đi trước khi phương tiện khởi hành và được trả lại tiền vé.', '', '', 1, '0'),
(2, 176, 0, ' Hành khách có các nghĩa vụ gì khi đi trên xe ô tô vận tải hành khách?', '1 – Mua vé và trả cước, phí vận tải hành lý mang theo quá mức quy định; có mặt tại nơi xuất phát đúng theo thời gian đã thỏa thuận; chấp hành quy định về vận chuyển; thực hiện đúng hướng dẫn của lái xe, nhân viên phục vụ trên xe về các quy định đảm bảo trật tự, an toàn giao thông.', '2 – Được mang theo hành lý, hàng hóa mà pháp luật cấm lư thông khi đã trả cước, phí vận tải.', '3 – Cả ý 1 và ý 2.', '', 1, '0'),
(2, 177, 0, ' Người kinh doanh vận tải hàng hóa có các quyền gì ở dưới đây?', '1 – Yêu cầu người thuê vận tải cung cấp thông tin cần thiết về hàng hóa để ghi vào giấy vận chuyển và có quyền kiểm tra tính xác thực của các thông tin đó.', '2 –Yêu cầu xếp hàng hóa vận chuyển trên xe vượt quá chiều cao quy định nhưng phải có chằng buộc chắc chắn.', '3 – Yêu cầu xếp hàng hóa vượt trọng tải 10 %.', '', 1, '0'),
(2, 178, 0, ' Người kinh doanh vận tải hàng hóa có các nghĩa vụ gì dưới đây?', '1 – Cung cấp phương tiện và thực hiện thời gian địa điểm giao hàng hóa cho người nhận hàng theo điều kiện của người kinh doanh vận tải; chịu trách nhiệm về hậu quả mà người làm công, người đại diện gây ra do thực hiện yêu cầu của người kinh doanh vận tải phù hợp với quy định của pháp luật.', '2 – Bồi thương thiệt hại cho người thuê vận tải do mất mát, hư hỏng hàng hóa xảy trong quá trình vận tỉa từ lúc nhận hàng đến lúc giao hàng; bồi thường thiệt hại do người làm công, người đại diện gây ra trng khi thực hiện công việc được người kinh doanh vận tải giao; chịu trách nhiệm về hậu quả mà người làm công, người đại diện gây ra do thực hiện yêu cầu của người kinh doanh vận tải trái vứi quy định của pháp luật.', '3 – Cả ý 1 và ý 2.', '', 2, '0'),
(2, 179, 0, ' Ngườ thuê vận tải hàng hóa có các quyền hạn gì dưới đây?', '1 – Từ chối xếp hàng lên phương tiện mà phương tiện đó không đúng thỏa thuận trong hợp đồng; yêu cầu người kinh doanh vận tải giao hàng đúng thời gian, địa điểm đã thỏa thuận trong hợp đồng; yêu cầu người kinh doanh vận tải bồi thường thiệt hại theo quy định của pháp luật.', '2 – Từ chối xếp hàng hóa lên phương tiện khi thấy phương tiện đó không phù hợp với yêu cầu; yêu cầu người kinh doanh vận tải giao hàng trước thời hạn đã thảo thuận trong hợp đồng; yêu cầu người kinh daonh vận tỉa bồi thườn thiệt hại khi người kinh doanh vận tải gây thiệt hại.', '', '', 1, '0'),
(2, 180, 0, ' Người thuê vận tải hàng hóa có các nghĩa vụ gì dưới đây?', '1 – Chuẩn bị đầy đủ các giấy tờ hợp pháp về hàng hóa trức khi giao hàng hóa cho người kinh doanh vận tải; đóng gói hàng hóa đúng quy cách, ghi ký hiệu, mã hiệu hàng hóa đúng quy cách, ghi ký hiệu, mã hiệu hàng hóa đầy đủ, rõ ràng; giao hàng hóa cho người kinh doanh vận tải đúng thời gian, địa điểm và nội dung khcas ghi trong giấy gửi hàng.', '2 – Chuẩn bị đầy đủ các giấy tờ hợp pháp về phương tiện vận chuyển hàng hóa và giao cho người lái xe; xếp hàng hóa lên phương tiện vận chuyển đảm bảo an toàn; giao hàng hóa cho người nhận hàng đúng thời gian, địa điểm.', '3 – Cả ý 1 và ý 2.', '', 1, '0'),
(2, 181, 0, ' Người nhận hàng có các quyền gì dưới đây?', '1 – Nhận và kiểm tra hàng hóa nhận được theo giấy vận chuyển hoặc chứng từ tương  dương khác; yêu cầu người kinh doanh vận tải thanh toán chi phí phát sinh do hàng hóa chậm.', '2 – Yêu cầu hoặc thông báo cho người thuê vận tải để yêu cầu người lái xe bồi thường thiệt hại do mất mát, hư hỏng hàng hóa; nhận hàng hóa không theo gấy tờ vận chuyể hoặc chứng từ tương đương khác.', '3 – Cả ý 1 và ý 2.', '', 1, '0'),
(2, 182, 0, ' Người nhận hàng có các nghĩa vụ gì dưới đây?', '1 – Nhận hàng háo đúng thời gian, đại điểm đã thảo thuận.', '2 – Xuất trình giấy vận chuyển và giấy tờ tùy thân cho người kinh doanh vận tải trước khi nhận hàng hóa; thanh toán chi phí phát sinh do nhận hàng chậm.', '3 – Cảy ý 1 và ý 2.', '', 3, '0'),
(2, 183, 0, ' Hàng siêu trường, siêu trọng được hiểu như thế nào là đúng?', '1 – Là hàng có kích thước vượt quá kíc thước và trọng lượng của xe.', '2 – Là hàng có kích thước hoặc trọng lượng vượt quá giới hạn quy định nhưng cso thể tháo rời.', '3 – LÀ hàng có kích thước hoặc trọng lượng vượt quá giới hạn quy định nhưng không thể tháo rời ra được.', '', 3, '0'),
(2, 184, 0, ' Việc vận chuyển động vật sống phải tuân theo những quy định nào dưới đây?', '1 – Tùy theo loại động vật sống, người kinh doanh vận tải yêu cầu người thuê vận tải áp tải hoặc chăm sóc trong quá trình vận tải.', '2 – Người thuê vận tải chịu trách nhiệm về việc xếp dỡ động vật sống theo hướng dẫn của người kinh doanh vậ tải; trường hợp người thuê vận tải không thực hiện được thì phải trả cước, phí xếp, dỡ cho người kinh doanh vận tải.', '3 – Cả ý 1 và ý 2.', '', 3, '0'),
(2, 185, 0, ' Xe vận chuyển hàng nguy hiểm phải chấp hành những quy định nào dưới đây?', '1 – Phải có giấy phép do cơ quan có thẩm quyền cấp, xe vận chuyển hàng nguy hiểm không được dừng, đỗ nơi đông người, những nơi dễ xảy ra nguy hiểm.', '2 – Phải được chuyên chở trên xe chuyên dùng để vận chuyển hàng nguy hiểm; xe vận chuyển hàng nguy hiểm phải chạy liên tục không được dừng, đỗ trong quá trình vận chuyển.', '3 – Cả ý 1 và ý 2.', '', 1, '0'),
(2, 186, 0, ' Trong đo thị, người lái xe buýt, xe chở hàng phải thực hiện những quy định nào dưới đây?', '1 – Người lái xe buýt phải chạy đúng tuyến, đúng lịch trình và dừng đỗ đúng nơi quy định; người lái xe chở hàng phải hoạt động đúng tuyến, phạm vi và thời gain quy định đối với từng loại xe.', '2 – Người lái xe buýt, xe chở hàng đón, trả khách, hàng hóa theo thỏa thuận giữa hành khách, chủ hàng và người lái xe.', '', '', 1, '0'),
(2, 187, 0, ' Việc vận chuyển hàng hóa bằng xe ô tô phải chấp hành các quy định nào dưới đây?', '1 – Hàng vận chuyển trên xe phải được xếp đặt gọn gang và chằng buộc chắc chắn.', '2 – Khi vận chuyển hàng rời phải che đậy, không để rơi vãi.', '3 – Cả ý 1 và ý 2.', '', 3, '0'),
(2, 188, 0, ' Những ký hiệu hàng hóa dưới đây kí hiệu nào chống mưa?', '1 – Hình 1.', '2 – Hình 2.', '3 – Hình 3.', '', 2, '188'),
(2, 189, 0, ' Ký hiệu chuyên dùng nà biểu hiện hàng chuyên chở phải tránh ánh nắng mặt trời?', '1 – Hình 1.', '2 – Hình 2.', '', '', 1, '189'),
(2, 190, 0, ' Hình nào dưới đây biểu hiện hàng chuyên chử đễ vỡ phải cẩn thận?', '1 – Hình 1.', '2 – Hình 2.', '', '', 1, '190'),
(2, 191, 0, ' Hình nào dưới đây đòi hỏi hàng phải xếp theo hướng thẳng đứng?', '1 – Hình 1.', '2 – Hình 2.', '3 – Hình 3.', '', 3, '191'),
(2, 192, 0, ' Hình nào dưới đây biểu hiện hàng chuyên chở là chất lỏng?', '1 – Hình 1.', '2 – Hình 2.', '', '', 2, '192'),
(3, 193, 0, ' Người hành nghề lái xe khi thực hiện tốt việc rèn luyện, nâng cao trách nhiệm, đạo đức nghề nghiệp sẽ thu được kết quả như thế nào?', '1 – Được khách hàng, xã hội tôn trọng; được đồng nghiệp quý mến, giúp đỡ; được doanh nghiệp tin dùng và đóng góp nhiều cho xã hội.', '2 – Thu hút được khách hàng, góp phần quan trọng trong xây dựng thương hiệu, kinh doanh có hiệu quả cao.', '3 – Cả ý 1 và ý 2.', '', 3, '0'),
(3, 194, 0, ' Người lái xe vận tải hàng hóa cần thực hiện những nhiệm vụ gì ghi ở dưới đây?', '1 – Thực hiện nghiêm chỉnh những nội dung hợp đồng giữa chủ phương tiện với chủ hàng trong việc vận chuyển và bảo quản hàng hóa trong quá trình vận chuyển; không chở hàng cấm, khoogn xếp hàng quá trọng tải của xe, quá trọng tải cho phép của cầu, đường; khi vận chuyển hàng quá khổ, quá tải, hàng nguy hiểm, hàng siêu trường, siêu trọng phải có giấy phép.', '2 – Thực hiện nghiêm chỉnh những nội dung hợp đồng giữa chủ phương tiện với chủ hàng trong việc vận chuyển và bảo quản hàng hóa trong quá trình vận chuyển; trong trường hợp cần thiết có thể xếp hàng quá trọng tải của xe, quá trọng tải cho phép của cầu theo yêu cầu của chủ hàng; khi vận chuyển hàng quá khổ, quá tải, hàng nguy hiểm, hàng siêu trường, siêu trọng phải được chủ hàng cho phép.', '', '', 1, '0'),
(3, 195, 0, ' Những lái xe kinh doanh vận tải cần thực hiện những công việc gì ghi ở dưới đây để thường xuyên rèn luyện nâng cao đạo đức nghề nghiệp?', '1 – Phải yêu quá xe, quản lý và sử dụng xe tốt; bảo dưỡng xe đúng định kỳ; thực hành tiết kiệm vật tư, nhiên liệu; luôn tu dưỡng bản thân, có lối sống lành mạnh, tác phong làm việc công nghiệp.', '2 – Nắm vững các quy định của pháp uật, tự giác chấp hành pháp luật, lái xe an toàn; coi hành khách như người thân, là đối tác tin cậy; có ý thức tổ chức kỷ luật và xây dựng doanh nghiệp vũng mạnh; có tinh thần hợp tác, tương trợ, giúp đỡ đồng nghiệp.', '3 – Cả ý 1 và ý 2.', '', 3, '0'),
(3, 196, 0, ' Người lái xe và nhân viên phục vụ trên xe ô tô vận tải hành khách phải có những trách nhiện gì theo quy định được ghi dưới đây?', '1 – Liểm tra các điều kiện đảm bảo an toàn của xe sau khi khởi hành; có trách nhiệm lái xe thật nhanh khi nhận giờ của khách.', '2 – Kiểm tra các điều kiện bảo dưỡng an toàn của xe trước khi khởi hành; có thái độ văn minh, lịch sự, hướng dẫn hành khách ngồi đúng nơi quy định; kiểm tra việc sắp xếp, chằng buộc hành lý, bảo đảm an toàn.', '3 – Có biện pháp bảo vệ tính mạng, sức khỏe, tài sản của hành khách đi xe, giữ gìn trật tự, vệ sinh trong xe; đóng cửa lên xuống của xe trức và trong khi xe chạy.', '4 – Cả ý 2 và ý 3.', 4, '0'),
(3, 197, 0, ' Khái niệm về văn hóa giao thông được hiểu như thế nào là đúng?', '1 – LÀ sự hiểu biết và chấp hành nghiêm chỉnh pháp luật về giao thông; là ý thức trách nhiệm với cộng đồng khi tham gia giao thông.', '2 – Là ứng xử có văn hóa, có tình yêu thương con người trongc ác tình huống không may xảy ra khi tham gia giao thông.', '3 – Cả ý 1 và ý 2.', '', 3, '0'),
(3, 198, 0, ' Trên làn đường dành cho ô tô có vũng nước lớn, có nhiều người đi xe mô tô trên làn đường bên cạnh, người lái xe ô tô xử lý như thế nào là có văn hóa giao thông?', '1 – Cho xe chạy thật nhanh qua vũng nước.', '2 – Giảm tốc độ cho xe chạy chậm qua vũng nước.', '3 – Giảm tốc độ cho xe chạy qua làn đường dành cho mô tô để tránh vũng nước.', '', 2, '0'),
(3, 199, 1, ' Người lái xe cô tình không phân biệt làn đường, vạch phân làn đường, phòng nhanh, vượt ẩu, vượt đèn đỏ, đi vào đường cấm, đường một chiều được coi là hnahf vi nào trong danh sách các hành vi dưới đây?', '1 – Là bình thường.', '2 – Là thiếu văn hóa giao thông.', '3 – Là có văn hóa giao thông.', '', 2, '0'),
(3, 200, 1, ' Khi sơ cưới người tai nạn giao thông đường bộ, có vết thương chảy máu ngoài, màu đỏ tươi phun thành tia và phun mạnh khi mạch đập bạn phải làm gì?', '1 – Thực hiện cầm mày trực tiếp.', '2 – Thực hiện cầm mày không trực tiếp(chặn động mạch).', '', '', 2, '0'),
(3, 201, 0, ' Người lái xe có văn hóa khi tham gia giao thông phải đáp ứng các điều kiện nào dưới đây?', '1 – Có trách nhiệm với bản than và với cộng đồng, tôn trọng, nhường nhịn người khác.', '2 – Tận tình giúp đỡ người tham gia giao thông gặp hoạn nạn, giúp đỡ người khuyết tật, trẻ em và người cao tuổi.', '3 – Cả ý 1 và ý 2.', '', 3, '0'),
(3, 202, 0, ' Trong các hành vi dưới đây, người lái xe mô tô có văn hóa giao thông phải ứng xử như thế nào?', '1 – Điều khiển xe đi trên phần đường, làn đường có ít phương tiện tham gia giao thông, chỉ đội mũ bảo hiểm ở nơi có biển báo bắt buộc đội mũ bảo hiểm.', '2 – Chấp hành quy định về tốc độ, đèn tìn hiệu, biển báo hiệu, vạch kẻ đường khi lái xe, chấp hành hiệu lệnh, chỉ dẫn của người điều khiển giao thông, nhường đường cho người đi bộ, người già, trẻ em, người khuyết tật.', '3 – Cả ý 1 và ý 2.', '', 2, '0'),
(3, 203, 0, ' Trong các hành vi dưới đây, người lái xe mô tô có văn hóa giao thông phải ứng xử như thế nào?', '1 – Điều khiển xe đi bên phải theo chiều đi của minh, đi đúng phần đường, làn đường quy định, đội mũ bảo hiểm đạt chuẩn, cài quai đúng quy cách.', '2 – Điều khiển xe đi trên phần đường, làn đường có ít phương tiện tham gia giao thông.', '3 – Đội mũ bảo hiểm ở nơi có biển báo bắt buộc đội mũ bảo hiểm.', '', 1, '0'),
(3, 204, 0, ' Trong các hành vi dưới đây, người lái xe ô tô có văn hóa giao thông phải ứng xử như thế nào?', '1 – Điều khiển xe đi bên phải theo chiều đi của minh; đi đúng phần đường, làn đường quy đinh; dừng, đỗ xe đúng nơi quy định; đã uống rượu, bia thì không lái xe.', '2 – Điều khiển xe đi phần đường, làn đường có ít phương tiện giao thông; dừng xe, đỗ xe ở nơi thuận tiện hoặc theo yêu cầu của hành khách, của người than.', '3 – Dừng và đỗ xe ở nơi thuận tiện cho việc giao nhận hành khách và hàng hóa; sử dụng ít rượu, bia thì có thể lái xe.', '', 1, '0'),
(3, 205, 0, ' Người có văn hóa giao thông khi điều khiển xe cơ giới tham gia giao thông đường bộ phải đảm bảo các điều kiện gì?', '1 – Có giấy phép lái xe phù hợp với loại xe được phép điều khiển; xe cơ giới đảm bảo các quy định về chất lượng, an toàn kỹ thuật và bảo vệ môi trường.', '2 – Có giấy chúng nhận bảo hiểm trách nhiệm dân sự của chủ xe cơ giới còn hiệu lực; nộp phí sử dụng đường bộ theo quy định.', '3 – Cả ý 1 và ý 2.', '', 3, '0'),
(3, 206, 0, ' Khi xảy ra tai nạn giao thông, người lái xe và người có mặt tại hiện trường vụ tai nạn phải thực hiện các công việc gì dưới đây?', '1 – Đặt các biển cảnh báo hoặc vật báo hiệu ở phía trước và phía sau hiện trường xảy ra tai nạn để cảnh báo; kiểm tra khả năng xảy ra hỏa hoạn do nhiên liệu bị rò rỉ; bảo vệ hiện trường vụ tai nạn và cấp cứu người bị thương.', '2 –  Đặt các biển cảnh báo hoặc vật báo hiệu ở phía trên nóc xe xảy ra tại nạn để cảnh báo; kiểm tra khả năng xảy ra mất an toàn do nước làm mát bị rò rỉ; di chuyển hiện trượng vụ tai nạn để giao thông thông suốt.', '3 – Cả ý 1 và ý 2.', '', 1, '0'),
(3, 207, 0, ' Khi xảy ra tai nạ giao thông, có người bị thương nghiêm trọng, người lái xe và người có mặt tại hiện trường vụ tai nạn phải thực hiện các công việc gì?', '1 – Thực hiện sơ cứu ban đầu trong trường hợp khẩn cấp; thông báo vụ tai nạn đến cơ quan thi hành pháp luật.', '2 – Nhanh chóng lãi e gây tai nạn hoặc đi nhờ xe khác ra khỏi hiện trường vụ tai nạ.', '3 – Cả ý 1 và ý 2.', '', 1, '0'),
(3, 208, 0, ' Khi sơ cứu ban đầu cho người bị tai nạn giao thông đường bộ không còn hô hấp, người lái xe và người có mặt tại hiện trường vụ tai nạn phải thực hiện các công việc gì?', '1 – Đặt nạn nhân nằm ngửa, khai thông đường thở của nạn nhân.', '2 – Thực hiện các biện pháp hô hấp nhân tạo.', '3 – Cả ý 1 và ý 2.', '', 3, '0'),
(3, 209, 0, ' Hành vi bỏ trốn sau khi gây tai nạn để trốn tránh trách nhiệm hoặc khi có điều kiện mà cố ý không cứu giúp người bị tai nạn giao thông có bị nghiêm cấm hay không?', '1 – Không bị nghiêm cấm.', '2 – Nghiêm cấm tùy từng trường hợp cụ thể.', '3 – Bị nghiêm cấm.', '', 3, '0'),
(3, 210, 1, ' Khi xảy ra tai nạn giao thông, những hành vi nào dưới đây bị nghiêm cấm?', '1 – Xâm phạm tính mạng, sức khỏe, tài sản của người bị nạn và người gây tai nạn.', '2 – Bỏ trốn sau khi gây tai nạn để trốn tránh trách nhiệm.', '3 – Cả ý 1 và ý 2.', '', 3, '0'),
(3, 211, 1, ' Khi xảy ra tai nạn giao thông, những hành vi nào dưới đây bị nghiêm cấm?', '1 – Xâm phạm tính mạng, sức khỏe, tài sản của người bị nạn và người gây tai nạn.', '2 – Sơ cứu người bị tai nạn khi cơ quan có thẩm quyền chưa cho phép.', '3 – Sơ cứu người gây tai nạn khi cơ quan có thẩm quyền chưa cho phép.', '', 1, '0'),
(3, 212, 0, ' Trọng đoạn đường hai chiều tại khu đông dân cư đang ùn tắc, người điều khiển xe mô tô hai bánh có văn hóa giao thông sẽ lựa chọn xử lý tình huống nào dưới đây?', '1 – Cho xe lấn sang làn ngược chiều để nhanh chóng thoát khỏi nơi ùn tắc.', '2 – Điều khiển xe lên vỉa hè để nhanh chóng thoát khỏi nơi ùn tắc.', '3 – Kiên nhân tuân thủ hướng dẫn của người điều khiển giao thông hoặc tín hiệu giao thông, di chuyển trên đúng phần đường bên phải theo chiều đi, nhường đường cho các phương tiện đi ngược chiều để nút tắc nhanh chóng được giải tỏa.', '', 3, '0'),
(3, 213, 0, ' Trên đường đang xảy ra ùn tắc những hành vi nào sau đây là thiếu văn hóa khi tham gia giao thông?', ' 1 – Bấm còi liên tục thúc giục các phương tiện phía trước nhường đường.', '2 – Đi lên vỉa hè, tận dụng mọi khoảng trống để nhanh chóng thoát khỏi nơi ùn tắc.', '3 – Lấn sang làn đường bên trái cố gắng vượt lên xe khác.', '4 – Tất cả các ý nêu trên.', 4, '0'),
(4, 214, 1, ' Khi điều khiển xe mô tô tay ga xuống đường dốc dài, độ dốc cao, người lái xe cần thực hiện các thao tác nào dưới đây để đảm bảo an toàn?', '1 – Giữ tay ga ở mức độ phù hợp, sử dụng phanh trước và phanh sau để giảm tốc độ.', '2 – Nhả hết tay ga, tắt động cơ, sử dụng phanh trước và phanh sau để giảm tốc độ.', '3 – Sử dụng phanh trước để giảm tốc độ kết hợp với tắt chìa khóa điện của xe.', '', 1, '0'),
(4, 215, 0, ' Khi vào số để khởi hành xe ô tô có số tự động, người lái xe phải thực hiện các thao tác nào để đảm bảo an toàn?', '1 – Đạo bàn đạp phanh chân hết hành trình, vào số và nhả phanh tay nếu có, kiểm tra lại xem có bị nhầm số không rồi mưới cho xe lăn bánh.', '2 – Đạp bàn đạp để tăng ga với mức độ phù hợp, vào số và kiểm tra xem có bị nhầm số không rồi mới cho xe lăn bánh.', '', '', 1, '0'),
(4, 216, 0, ' Khi nhả hệ thống phanh dừng cơ khí điều khiển bằng tay (phanh tay), người lái xe cần phải thực hiện các thao tác nào?', '1 – Dùng lực tay phải kéo cần phanh tay về phía sau hết hành trình; nếu khóa hãm bị kẹt cứng phải đẩy mạnh phanh tay về phái trước, sau đó bóp khóa hãm.', '2 – Dùng lực tay phải bóp khóa hãm đẩy cần phanh tay vê phía trước hết hành trình; nếu khóa hãm bị kẹt cứng phải kéo cần phanh tay về phái sau đồng thời bóp khóa hãm.', '3 – Dùng lực tay phải đẩy cần phanh tay về phía trước hết hành trình; nếu khóa hãm bị kẹt cứng phải đẩy mạnh cần phanh tay về phái trước, sau đó bóp khóa hãm.', '', 2, '0'),
(4, 217, 0, ' Khi khởi hành ô tô sử dụng hộp số cơ khí trên đường bằng, người lái xe cần thực hiện các thao tác nào theo trình tự dưới đây?', '1 – Kiểm tra an toàn xung quanh xe ô tô, nhả từ từ đến ½ hành trình bàn đạp ly hợp (côn) và giữu trong khoảng 3 giây; vào số 1; nhả hết phanh tay, báo hiệu bằng còi, đèn trước khi xuất phát; tang ga đủ để xuất phát, sau đó vừa tang ga vừa nhả hết ly hợp để cho xe ô tô chuyển động.', '2 – Kiểm tra an toàn xung quanh xe ô tô; đạp ly hợp (côn) hết hành trình; vào số 1; nhả hết phanh tay, báo hiệu bằng còi, đèn trước khi xuất phát; tang ga đủ để xuất phát; nhả từ từ đến ½ hành trình bàn đạp ly hợp và giữ trong khoảng 3 giây, sau đó vừa tang ga vừa nhả hết ly hợp (côn) để cho xe ô tô chuyển động.', '', '', 2, '0'),
(4, 218, 0, ' Khi quay đầu xe, người lái xe cần phải quan sát và thực hiện các thao tác nào để đảm bảo an toàn giao thông?', '1 – Quan sát biển báo hiệu để biết nơi được phép quay đầu; quan sát kỹ địa hình nơi chọn để quay đầu; lựa chọn quỹ đạo quay đầu xe cho thích hợp;  quay đầu xe với tốc độ thấp; thường xuyên báo tín hiệu để người, các phương tiện xung quanh được biết; nếu quay đầu xe ở nơi nguy hiểm thì đưa đầu xe về phía nguy hiểm, đưa đuôi xe về phái an toàn.', '2 – Quan sát biển báo để biết nơi được phép; quan sát kỹ địa hình nơi chọn để quay đầu; lựa chọn quỹ đạo quay đầu x echo thích hợp;  quay đầu xe với tốc độ tối đa; thường xuyên báo tín hiệu để người, các phương tiện xung quanh được biết; nếu quay đầu xe ở nơi nguy hiểm thì đưa đuôi xe về phía nguy hiểm và đầu xe về phía an toàn.', '', '', 1, '0'),
(4, 219, 0, ' Khi tránh nhau trên đường hẹp, người lái xe cần phải chú ý những điểm nào để đảm bảo an toàn giao thông?', '1 – Không nên đi cố vào đường hệp; xe đi ở phía sườn núi nên dừng lại trước để nhường đường ; khi dừng xe nhường đường phải đổ ngay ngắn.', '2 – Trong khi tránh nhau không nên đổi số; khi tránh nhau ban đêm phải tắt đèn pha, bật đèn cốt.', '3 – Khi tránh nhau ban đêm, phải thường xuyên bật đèn pha tắt đèn cốt.', '4 – Cả ý 1 và ý 2.', 4, '0'),
(4, 220, 0, ' Khi điều khiển ô tô lên dốc cao, người lái xe cần thực hiện các thao tác nào?', '1 – Tăng lên số cao từ chân dốc, điều chỉnh ga cho xe nhanh lên đốc; đến gần đỉnh dốc phải tăng ga để xe nhanh chóng qua dốc; về số thấp, đi sát về phái bên phải đường, có tín hiệu (còi, đèn) để báo cho người lái xe đi ngược chiều biết.', '2 – Về số thấp từ chân dốc, điều chỉnh ga cho xe từ từ lên dốc; đến gần đỉnh dốc phải đi chậm, đi sát về phía bên phải đường, có tín hiệu (còi, đèn) để báo cho người lái xe đi ngược chiều biết.', '', '', 2, '0'),
(4, 221, 1, ' Khi điều khiển ô tô xuống dốc cao, người lái xe cần thực hiện các thao tác nào dưới đây để đảm bảo an toàn?', '1 – Tăng lên số cao, nhả bàn đạp ga ở mức độ phù hợp, kết hợp phanh chân để không chế tốc độ.', '2 – Về số thấp, nhả bàn đạp ga ở mức độ phù hợp, kết hợp phanh chân để không chế tốc độ.', '3 – Về số không (N), nhả bàn đạp ga ở mức độ phù hợp, kết hợp phanh chân để không chế tốc độ.', '', 2, '0'),
(4, 222, 0, ' Khi xuống dốc, muốn dừng xe, người lái xe cần thực hiện các thao tác nào để đảm bảo an toàn?', '1 – Có tín hiệu rẻ phải, điều khiển xe sát vào lề đường bên phải; đạp phanh sớm và mạnh hơn lúc mạnh hơn lúc dừng xe trên đường bằng để xe đi với tốc độ chậm đến mức đễ dàng dừng lại được; về số 1, đạp nửa ly hợp (côn) cho xe đến chổ dừng; khi xe đã dừng, về số không (N), đạp phanh chân và kéo phanh tay.', '2 – Có tín hiệu rẻ phải, điều khiển xe sát vào lề bên trái; đạp hết hành trình ly hợp (côn) và nhả bàn đạp ga để xe đi với tốc độ chậm đến mức dễ dàng dừng lại được tại chỗ dừng; khi xe đã dừng, đạp và giữ phanh chân.', '3 – Có tín hiệu rẻ trái, điều khiển xe sát vào lề đường bên phải; đạp phanh sớm và mạnh hơn lúc mạnh hơn lúc dừng xe trên đường bằng để xe đi với tốc độ chậm đến mức đễ dàng dừng lại được; về số không (N) để xe đi đến chỗ dừng, khi xe đã dừng, kéo phanh tay.', '', 1, '0'),
(4, 223, 0, ' Khi điều khiển xe trên đường vòng người lái xe cần phải làm gì để đảm bảo an toàn?', '1 – Quan sát cẩn thận các chướng ngại vật và báo hiệu bằng còi, đèn; giảm tốc độ tới mức cần thiết, về số thấp và thực hiện quay vòng với tốc độ phù hợp với bán kính cong của đường vòng.', '2 – Quan sát cẩn thận các chướng ngại vật và báo hiệu bằng còi, đè; tang tốc nhanh chóng qua đường vòng và giảm tốc độ sau khi qua đường vòng.', '', '', 1, '0'),
(4, 224, 0, ' Khi điều khiển xe ô tô rẽ phải ở chỗ đường giao nhau, người lái xe cần thực hiện các thao tác nào để đảm bảo an toàn?', '1 – Có tín hiệu rẽ phải, quan sát an toàn phía sau; điều khiển xe sang làn đường bên trái; giảm tốc độ và quan sát an toàn phía bên phải để điều khiển xe qua chỗ đường giao nhau.', '2 – Cách chỗ rẽ một khoảng cách an toàn có tín hiệu rẽ phải; quan sát an toàn phía sau; điều khiển xe bám sát vào phía phải đường; giảm tốc độ và quan sát an toàn phía bên phải để điều khiển xe qua chỗ đường giao nhau.', '3 – Cách chỗ rẽ một khoảng cách an toàn có tín hiệu rẽ phải; quan sát an toàn phía sau; điều khiển xe bám sát vào phía phải đường; tang tốc độ và quan sát an toàn phía bên trái để điều khiển xe qua chỗ đường giao nhau.', '', 2, '0'),
(4, 225, 0, ' Khi điều khiển xe ô tô rẽ Trái ở chỗ đường giao nhau, người lái xe cần thực hiện các thao tác nào để đảm bảo an toàn?', '1 – Cách chỗ rẽ một khoảng cách an toàn giảm tốc độ, có tín hiệu rẽ trái xin đổi làn đường; quan sát an toàn xung quanh đặc biệt là bên trái; đổi sang làn đường bên trái; cho xe chạy chậm tới phía trong của tâm đường giao nhau mưới rẽ trái để điều khiển xe qua chỗ đường giao nhau.', '2 – Cách chỗ rẽ một khoảng cách an toàn có tín hiệu rẽ trái, tăng tốc để xe nhanh chóng qua chỗ đường giao nhau; có tín hiệu đổi làn đường; quan sát an toàn xung quanh đặc biệt là bên trái; đổi làn đường sang phải để mwor rộng vòng cua.', '', '', 1, '0'),
(4, 226, 0, ' Khi điều khiển xe sử dụng hộp số cơ khí vượt qua rãnh lớn cắt ngang mặt đường, người lái xe cần thực hiện các thao tác nào để đảm bảo an toàn?', '1 – Gài số một (1) và từ từ cho hai bánh xe trước xuống rãnh, tăng ga cho hai bánh trước vượt lên khỏi rãnh, tăng số, tăng tốc độ để bánh xe sau vượt qua rãnh.', '2 – Tăng ga, tăng số để hai bánh xe trước và bánh xe sau vượt qua khỏi rãnh và chạy bình thường.', '3 – Gài số một (1) và từ từ cho hai bánh xe trước xuống rãnh, tăng ga cho hai bánh trước vượt lên khỏi rãnh, tiếp tục để bánh xe sau từ từ xuống rãnh rồi tăng dần ga cho xe ô tô lên khỏi rãnh.', '', 3, '0'),
(4, 227, 1, ' Khi điều khiển xe qua đường sắt, người lái xe cần phải thực hiện các thao tác nào dưới đây để đảm bảo an toàn?', '1 – Khi có chuông báo hoặc thanh chắn đã hạ xuống, người lái xe phải dừng xe tạm thời đúng khoảng cách an toàn, kéo phanh tay nếu đường dốc hoặc phải chờ lâu.', '2 – Khi không có chuông báo hoặc thanh chắn không hạ xuống, người lái xe phải quan sát nếu thấy đủ điều kiện an toàn thì về số thấp, tăng ga nhẹ để tránh động cơ chết máy cho xe vượt qua.', '3 – Cả ý 1 và ý 2.', '', 3, '0'),
(4, 228, 0, ' Khi điều khiển ô tô tự đổ, người lái xe cần chú ý những điểm gì để đảm bảo an toàn?', '1 – Khi chạy trên đường xấu, nhiều ổ gà nên chạy chậm để thùng xe không bị lắc mạnh, không gây hiện tượng lệch “ben”; khi chạy vào đường vòng, cần giảm tốc độ, không lấy lái gấp và không phanh gấp.', '2 – Khi chạy trên đường quốc lộ, đường bằng phẳng  không cần hạ hết thùng xe xuống.', '3 – Khii đổ hàng phải chọn vị trí có nền đường cứng và phẳng, dừng hẳn xe, kéo chặt phanh tay; sau đó mới điều khiển cơ cấu nâng “ben” để đõ hàng, đổ xong hàng mới hạ thùng xuống.', '4 – Cả ý 1 và ý 3.', 4, '0'),
(4, 229, 0, ' Khi điều khiển xe tăng số, người lái xe cần chú ý những điểm gì để đảm bảo an toàn?', '1 – Không được nhìn xuống buồng lái, cần phải tăng thứ tự từ thấp đến cao, phối hợp các động tác phải nhịp nhàng, chính xác.', '2 – Nhìn xuống buồng lái để biết chính xác vị trí các tay số, cần phải tăng thứ tự từ thấp đến cao, phối hợp các động tác phải nhịp nhàng, vù ga phải phù hợp với tốc độ.', '', '', 1, '0'),
(4, 230, 0, ' Khi điều khiển xe giảm số, người lái xe cần chú ý những điểm gì để đảm bảo an toàn?', '1 – Nhìn xuống buồng lái để biết chính xác vị trí các tay số, cần phải giảm thứ tự từ cao đến thấp, phối hợp các động tác phải nhịp nhàng, chính xác.', '2 – Không được nhìn xuống buồng lái, phối hợp các động tác phải nhịp nhàng, chính xác, vù ga phải phù hợp với tốc độ.', '', '', 2, '0'),
(4, 231, 1, ' Để giảm tốc độ khi ô tô xuống đường dốc dài, người lái xe phải thực hiện các thao tác nào để đảm bảo an toàn?', '1 – Nhả bàn đạp ga, đạp ly hợp (côn) hết hành trình, đạp mạnh phanh chân để giảm tốc độ.', '2 – Về số thấp phù hợp, nhả bàn đạp ga, đạp phanh chân với mức độ phù hợp để giảm tốc độ.', '3 – Nhả bàn đạp ga, tăng lên số cao, đạp phanh chân với mức độ phù hợp để giảm tốc độ.', '', 2, '0'),
(4, 232, 0, ' Khi điều khiển ô tô qua đoạn đường ngập nước, người lái xe cần thực hiện các thao tác nào để đảm bảo an toàn?', '1 – Tăng lên số cao, tăng ga và giảm ga liên tục để thay đổi tốc độ, giữ vững tay lái để ô tô vượt qua đoạn đường ngập nước.', '2 – Đạp ly hợp (côn) hết hành trình, tăng ga và giảm ga liên tục để thay đổi tốc độ, giữ vững tay lái để ô tô vượt qua đoạn đường ngập nước.', '3 – Quan sát, ước lượng độ ngập nước mà xe ô tô có thể vượt qua an toàn, về số thấp, giữu đều ga và giữu vững tay lái để ô tô vượt qua đoạn đường ngập nước.', '', 3, '0'),
(4, 233, 0, ' Khi điều khiển ô tô tới gần xe chạy ngược chiều vào ban đêm, người lái xe cần thực hiện các thao tác nào để đảm bảo an toàn?', '1 – Chuyển từ đèn chiếu xa sang đèn chiếu gần; không nhìn thẳng vào đèn của xe chạy ngược chiều mà nhìn chếch sang phía phải theo chiều chuyển động của xe mình.', '2 – Chuyển từ đèn chiếu gần sang đèn chiếu xa; không nhìn thẳng vào đèn của xe chạy ngược chiều mà nhìn chếch sang phía phải theo chiều chuyển động của xe mình.', '3 – Chuyển từ đèn chiếu xa sang đèn chiếu gần; nhìn thẳng vào đèn của xe chạy ngược chiều để tránh xe đảm bảo an toàn.', '', 1, '0'),
(4, 234, 0, ' Khi điều khiển xe ô tô trên đường trơn cần chú ý những điểm gì để đảm bảo an toàn?', '1 – Giữ vững tay lái cho xe đi đúng vệt bánh xe đi trước, sử dụng số thấp đi chậm, giữu đều ga, đánh lái ngoặt và phanh gấp khi cần thiết.', '2 – Giữ vững tay lái cho xe đi đúng vệt bánh xe đi trước; sử dụng số thấp đi chậm (số L hoặc 1, 2 đối với xe tự động) gài cầu (nếu có), giữ đều ga, không lấy nhiều lái, không đánh lái ngoặt và phanh gấp.', '', '', 2, '0'),
(4, 235, 0, ' Khi động cơ ô tô đã khởi động, bảng đồng hồ xuất hiện ký hiệu như hình vẽ dưới đây, báo hiệu tình trạng như thế nào của xe ô tô?', '600 Câu Hỏi Lý Thuyết &amp; Đáp Án Thi Sát Hạch Lái Xe Ôtô Mới Nhất 3361 – Phanh tay đang hãm hoặc thiếu dầu phanh.', '2 – Nhiệt độ nước làm mát quá mức cho phép.', '3 – Cửa xe đang mở.', '', 1, '235'),
(4, 236, 0, ' Khi động cơ ô tô đã khởi động, bảng đồng hồ xuất hiện ký hiệu như hình vẻ dưới đây, báo hiệu tình trạng như thế nào của xe ô tô?', '600 Câu Hỏi Lý Thuyết &amp; Đáp Án Thi Sát Hạch Lái Xe Ôtô Mới Nhất 3371 – Phanh tay đang hãm.', '2 – Thiếu dầu phanh.', '3 – Nhiệt độ nước làm mát tăng quá mức cho phép.', '4 – Dầu bôi trơn bị thiếu.', 4, '236'),
(4, 237, 0, ' Khi động cơ ô tô đã khởi động, bảng đồng hồ xuất hiện ký hiệu như hình vẽ dưới đây, báo hiệu tình trạng như thế nào của xe ô tô?', '600 Câu Hỏi Lý Thuyết &amp; Đáp Án Thi Sát Hạch Lái Xe Ôtô Mới Nhất 3381 – Cửa xe đóng chưa chặt; hoặc có cửa xe chưa đóng.', '2 – Bộ nạp ắc quy gặp sự cố kỹ thuật.', '3 – Dầu bôi trơn bị thiếu.', '4 – Cả ý 2 và ý 3.', 1, '237'),
(4, 238, 0, ' Khi động cơ ô tô đã khởi động, bảng đồng hồ xuất hiện ký hiệu như hình vẽ dưới đây, báo hiệu tình trạng như thế nào của xe ô tô?', '600 Câu Hỏi Lý Thuyết &amp; Đáp Án Thi Sát Hạch Lái Xe Ôtô Mới Nhất 3391 – Thiếu dầu phanh, phanh tay đang hãm.', '2 – Hệ thống túi khí an toàn gặp sự cố.', '3 – Lái xe và người ngồi ghế trước chưa cài dây an toàn.', '4 – Cửa đóng chưa chặt, có cửa chưa đóng.', 3, '238'),
(4, 239, 0, ' Khi động cơ ô tô đã khởi động, bảng đồng hồ xuất hiện ký hiệu như hình vẽ dưới đây, báo hiệu tình trạng như thế nào của xe ô tô?', '600 Câu Hỏi Lý Thuyết &amp; Đáp Án Thi Sát Hạch Lái Xe Ôtô Mới Nhất 3401 – Báo hiệu thiếu dầu phanh.', '2 – Áp suất lốp không đủ.', '3 – Đang hãm phanh tay.', '4 – Sắp hết nhiên liệu.', 4, '239'),
(4, 240, 0, ' Trong các loại nhiên liệu dưới đây, loại nhiên liệu nào giảm thiểu ô nhiễm môi trường?', '1 – Xăng và dầu diesel.', '2 – Xăng sinh học và khí sinh học.', '3 – Cả ý 1 và ý 2.', '', 2, '0'),
(4, 241, 0, ' Các biện pháp tiết kiệm nhiên liệu khi chạy xe?', '1 – Bảo dưỡng xe theo định kỳ và có kế hoạch lộ trình trước khi chạy xe.', '2 – Kiểm tra áp suất lốp theo quy định và chạy xe với tốc độ phù hợp với tình trạng mặt đường và mật độ giao thông trên đường.', '3 – Cả ý 1 và ý 2.', '', 3, '0'),
(4, 242, 1, ' Khi đã đổ xe ô tô sát lề đường bên phải, người lái xe phải thực hiện các thao tác nào dưới đây khi mở cửa xuống xe để đảm bảo an toàn?', '1 – Quan sát tình hình giao thông phía sau, mở hé cánh cửa, nếu đảm bảo an toàn thì mở cửa ở mức cần thiết để xuống xe ô tô.', '2 – Mở cánh cửa và quan sát tình hình giao thông phía trước, nếu đảm bảo an toàn thì mở cửa ở mức cần thiết để xuống xe ô tô.', '3 – Mở cánh cửa hết hành trình và nhanh chóng ra khỏi xe ô tô.', '', 1, '0'),
(4, 243, 0, ' Khi lái ô tô qua đường sắt không có rào chắn, không có người điều khiển giao thông, người lái xe phải xử lý như thế nào để đảm bảo an toàn?', '1 – Tạm dừng xe tại vị trí cách đường sắt tối thiểu 5 mét, hạ kính cửa, tắt các thiết bị âm thanh trên xe, quan sát, nếu không có tàu chạy quá, về số thấp, tăng ga nhẹ để tránh động cơ chết máy do xe vượt qua.', '2 – Tại vị trí cách đường sắt tối thiểu 5 mét quá sát phía trước, nếu tàu còn cách xa, tăng số cao, tăng ga để cho xe nhanh chóng vượt qua đường sắt.', '', '', 1, '0'),
(4, 244, 0, ' Khi lái ô tô qua đường sắt không có rào chắn, không có người điều khiển giao thông, người lái xe thực hiện thao tác: tạm dừng xe tại vị trí cách đường sắt tối thiểu 5 mét, hạ kính cửa, tắt các thiết bị âm thanh trên xe, quan sát, nếu không có tàu chạy quá thì về số thấp, tăng ga nhẹ để tránh động cơ chết máy do xe vượt qua để đảm bảo an toàn là đúng hay không?', '1 – Không đúng.', '2 – Đúng.', '3 – Không cần thiết, vì nếu nhìn thấy tàu còn cách xa, người lái xe có thể tăng số cao, tăng ga để cho xe nhanh chóng vượt qua đường sắt.', '', 2, '0'),
(4, 245, 1, ' Khi điều khiển ô tô có hộp số tự động đi vào đường trơn trượt, lầy lội, người lái xe phải xử lý như thế nào để đảm bảo an toàn trong các trường hợp dưới đây?', '1 – Về số thấp, kết hợp phanh chân để giảm tốc độ.', '2 – Giữ nguyên tay số D, kết hợp phanh tay để giảm tốc độ.', '3 – Về số N (số  0), kết hợp phanh chân để giảm tốc độ.', '', 1, '0'),
(4, 246, 0, ' Khi động cơ ô tô đã khởi động, muốn điều chỉnh ghế của người lái, người lái xe phải điều chỉnh cần số ở vị trí nào?', '1 – Vị trí N hoặc vị trí P hoặc số 0.', '2 – Vị trí D hoặc số 1.', '3 – Vị trí R.', '', 1, '0'),
(4, 247, 0, ' Khi điều khiển ô tô có hộp số tự động, người lái xe sử dụng chân như thế nào là đúng để đảm bảo an toàn?', '1 – Không sử dụng chân trái; chân phải điều khiển bàn đạp phanh và bàn đạp ga.', '2 – Chân trái điều khiển bàn đạp phanh, chân phải điều khiển bàn đạp ga.', '3 – Không sử dụng chân phải; chân trái điều khiển bàn đạp phanh và bàn đạp ga.', '', 1, '0');
INSERT INTO `600_cau_hoi` (`chuong`, `cau`, `cau_diem_liet`, `cauhoi`, `dapan1`, `dapan2`, `dapan3`, `dapan4`, `dapandung`, `img`) VALUES
(4, 248, 1, ' Khi tầm nhìn bị hạn chế bởi sương mù hoặc mưa to, người lái xe phải thực hiện các thao tác nào?', '1 – Tăng tốc độ, chạy gần xe trước đó, nhìn đèn chiều hậu để định hướng.', '2 – Giảm tốc độ, chạy cách xe trước với khoảng cách an toàn, bật đèn sương mù và đèn chiếu gần.', '3 – Tăng tốc độ, bật đèn pha vượt qua xe chạy trước.', '', 2, '0'),
(4, 249, 0, ' Khi đèn pha của xe đi ngược chiều gây chói mắt, làm giản khả năng quan sát trên đường, người lái xe xử lý như thế nào để đảm bảo an toàn?', '1 – Giảm tốc độ, nếu cần thiết có thể dừng xe lại.', '2 – Bật đèn pha chiếu xa và giữ nguyên tốc độ.', '3 – Tăng tốc độ, bật đèn pha đối diện xe phía trước.', '', 1, '0'),
(4, 250, 0, ' Để đạy được hiệu quả phanh cao nhất, người lái xe mô tô phải sử dụng các kỹ năng như thế nào dưới đây?', '1 – Sử dụng phanh trước.', '2 – Sửu dụng phanh sau.', '3 – Giảm hết ga; sử dụng đồng thời cả phanh sau và phanh trước.', '', 3, '0'),
(4, 251, 0, ' Khi lái xe ô tô trên mặt đường có nhiều “ổ gà”, người lái xe phải thực hiện thao tác như thế nào để đảm bảo an toàn?', '1 – Giảm tốc độ, về số thấp và giữ đều ga.', '2 – Tăng tốc độ cho xe lướt qua nhanh.', '3 – Tăng tốc độ, đánh lái liên tục để tránh “ổ gà”.', '', 1, '0'),
(4, 252, 0, ' Khi điều khiển ô tô gặp mưa to hoặc sương mù, người lái xe phải làm gì để đảm bảo an toàn?', '1 – Bật đèn chiếu gần và đèn vàng, điều khiển gạt nước, điều khiển ô tô đi với tốc độ chậm để có thể quan sát được; tìm chỗ an toàn dừng xe, bật đèn dừng khẩn cấp báo hiệu cho các xe khác biết.', '2 – Bật đèn chiếu xa và đèn vàng, điều khiển gạt nước, tăng tốc độ điều khiển ô tô qua khu vực mưa hoặc sương mù.', '3 – Tăng tốc độ, bật đèn pha vượt qua xe chạy phía trước.', '', 1, '0'),
(4, 253, 0, ' Điều khiển ô tô trong trời mưa, người lái xe phải xử lý như thế nào để đảm bảo an toàn?', '1 – Giảm tốc độ, tăng cường quan sát, không nên phanh gấp, không nên tăng ga hay đánh vô lăng đột ngột, bật đèn pha gần, mở chế độ gạt nước ở chế độ phù hợp để đảm bảo quan sát.', '2 – Phanh gấp khi xe đi vào vũng nước và tăng g ấu khi ra khỏi vũng nước.', '3 – Bật đèn chiếu xa, tăng tốc độ điều khiển ô tô qua khỏi khu vực mưa.', '', 1, '0'),
(4, 254, 0, ' Khi lùi xe, người lái xe phải xử lý như thế nào đẻ bảo đảm an toàn giao thông?', '1 – Quan sát bên trái, bên phải, phía sau xe, có tín hiệu cần thiết và lùi xe với tốc độ phù hợp.', '2 – Quan sát phía trước xe và lùi với tốc độ nhanh.', '3 – Quan sát bên trái và phía trước của xe và lùi xe với tốc độ nhanh.', '', 1, '0'),
(4, 255, 0, ' Điều khiển xe ô tô trong khu vực đông dân cư cần lưu ý điều gì dưới đây?', '1 – Giảm tốc độ đến mức an toàn, quan sát, nhường đường cho người đi bộ; giữ khoảng cách an toàn với các xe phía trước.', '2 – Đi đúng làn đường quy định; chỉ được chuyển làn đường ở nơi cho phép, nhưng phải quan sát.', '3 – Cả ý 1 và ý 2.', '', 3, '0'),
(4, 256, 0, ' Khi điều khiển xe ô tô nhập vào đường cao tốc người lái xe cần thực hiện như thế nào để bảo đảm an toàn giao thông?', '1 – Quan sát, phát tín hiệu và lái xe nhập vào làn đường tăng tốc, nhường đường cho các xe đang chạy trên đường cao tốc, khi đủ điều kiện an toàn thì tăng tốc độ cho xe nhập vào làn đường cao tốc.', '2 – Phát tín hiệu, quan sát các xe đang chạy phía trước, nếu đảm bảo các điều kiện an toàn thì tăng tốc độ cho xe nhập vào làn đường cao tốc.', '3 – Phát tín hiệu và lái xe nhập vào làn đường tăng tốc, quan sát các xe phía sau đang chạy trên đường cao tốc, khi đủ điều kiện an toàn thì giảm tốc độ, từ từ cho xe nhập vào làn đường cao tốc.', '', 1, '0'),
(4, 257, 0, ' Khi điều khiển xe ô tô ra khỏi đường cao tốc người lái xe cần thực hiện như thế nào để bảo đảm an toàn giao thông?', '1 – Quan sát phía trước để tìm biển báo chỉ dẫn “Lối ra đường cao tốc”, kiểm tra tình trạng giao thông phía sau và bên phải, nếu đảm bảo điều kiện an toàn thì phát tín hiệu và điều khiển xe chuyển dần sang làn đường giảm tốc và ra khỏi đường cao tốc.', '2 – Quan sát phía trước để tìm biển báo chỉ dẫn “Lối ra đường cao tốc”, trường hợp vượt qua “Lối ra đường cao tốc” thì phát tín hiệu chuyển sang làn đường giảm tốc và lùi xe quay trở lại.', '', '', 1, '0'),
(4, 258, 1, ' Người lái xe được dừng xe, đổ xe trên làn dừng khẩn cấp của đường cao tốc trong trường hợp nào dưới đây?', '1 – Xe gặp sự cố, tai nạn, hoặc trường hợp khẩn cấp không thể di chuyển bình thường.', '2 – Để nghỉ ngơi, đi vệ sinh, chụp ảnh, làm việc riêng…3 – Cả ý 1 và ý 2.', '', '', 1, '0'),
(4, 259, 0, ' Trong trường hợp bất khả kháng, khi dừng xe, đổ xe trên làn dừng khẩn cấp của đường cao tốc người lái xe phải xử lý như thế nào là đúng quy tắc giao thông?', '1 – Bật đèn cảnh báo sự cố, di chuyển phương tiện đền vị trí sát lề đường.', '2 – Sử dụng các thiết bị cảnh báo như chop nón, biển báo, đèn chóp… đặt phía sau xe để cánh báo các phương tiện.', '3 – Gọi số điện thoại khẩn cấp của đường cao tốc để được hỗ trợ nếu xe gặp sự cố, tai nạn, hoặc các trường hợp khẩn cấp không thể di chuyển bình thường.', '4 – Tất cả các ý nêu trên.', 4, '0'),
(4, 260, 1, ' Khi điều khiển ô tô xuống đường dốc dài, độ dốc cao, người lái xe số tự động cần thực hiện các thao tác nào dưới đây để đảm bảo an toàn?', '1 – Nhả bàn đạp ga, về số thấp (sử dụng số L hoặc 1, 2), đạp phanh chân với mức độ phù hợp để giảm tốc độ.', '2 – Nhả bàn đạp ga, về số không (N) đạp phanh chân và kéo phanh tay để giảm tốc độ.', '', '', 1, '0'),
(4, 261, 1, ' Khi đi từ đường nhánh ra đường chính, người lái xe phải xử lý nhưu thế nào là đúng quy tắc giao thông?', '1 – Giảm tốc độ, nhường đường cho xe trên đường chính từ bất kì hướng nào tới.', '2 – Nháy đèn, bấm còi để xe đi trên đường chính biết và tăng tốc độ cho xe đi ra đường chính.', '3 – Quan sát xe đang đi trên đường chính, nếu là xe có kích thước lớn hơn thì nhường đường, xe có kích thước nhỏ hơn thì tăng tốc độ cho xe đi ra đường chính.', '', 1, '0'),
(4, 262, 1, ' Khi đang lái xe mô tô và ô tô, nếu có nhu cầu sử dụng điện thoại để nhắn tin hoặc gọi điện, người lái xe phải thực hiện như thế nào trong các tình huống dưới đây?', '1 – Giảm tốc độ để đảm bảo an toàn với xe phía trước và sử dụng điện thoại liên lạc.', '2 – Giảm tốc độ để dừng xe ở nơi cho phép dừng xe sau đó sử dụng điện thoại để liên lạc.', '3 – Tăng tốc độ để cách ra xe phía sau và sửu dụng điển thoại để liên lạc.', '', 2, '0'),
(4, 263, 0, ' Những thói quen nào dưới đây điều khiển xe mô tô tay gat ham gia giao thông đễ gây tai nạn nguy hiểm?', '1 – Sử dụng còi.', '2 – Phanh đồng thời cả phanh trước và phanh sau.', '3 – Chỉ sử dụng phanh trước.', '', 3, '0'),
(4, 264, 0, ' Người ngồi trên xe ô tô cần thực hiện những thao tác mở cửa như thế nào để xuống xe một cách an toàn?', '1 – Quan sát gương chếu hậu hoặc xoay người quan sát phía sau để phát hiện các phương tiện đang di chuyển tới gần, khi đủ điều kiện an toàn, dùng tay các xa cửa hơn mở hé cửa, sau đó mở ở mức cần thiết để xuống xe.', '2 – Quan sát tình hình giao thông phía trước, không cần quan sát phía sau vè bên mở cửa; mở cánh cửa ra hết hành trình và nhanh chóng ra khỏi xe ô tô.', '', '', 1, '0'),
(4, 265, 0, ' Khi điều khiển xe mô tô quay đầu người lái xe cần thực hiện như thế nào để đảm bảo an toàn?', '1 – Bật tín hiệu báo rẽ trước khi quay đầu, từ từ giảm tốc độ đến mức có thể dừng lại.', '2 – Chỉ quay đầu xe tại những nơi được phép quay đầu.', '3 – Quan sát an toàn các phương tiện tới từ phía trước, phía sau, hai bên đồng thời nhường đường cho xe từ bên phải và phía trước đi tới.', '4 – Tất cả các ý nêu trên.', 4, '0'),
(4, 266, 0, ' Tay ga trên xe ô tô hai bánh có tác dụng gì trong các trường hợp dưới đây?', '1 – Để điều khiển xe chạy về phía trước.', '2 – Để điều tiết công suất động cơ qua đó điều khiển tốc độ của xe.', '3 – Để điều khiển xe chạy lùi.', '4 – Cả ý 1 và ý 2.', 4, '0'),
(4, 267, 0, ' Gương chiếu hậu của xe mô tô hai bánh, có tác dụng gì trong các trường hợp dưới đây?', '1 – Để quan sát an toàn phía bên trái khi xe chuẩn bị rẻ trái.', '2 – Để quan sát an toàn phía bên phải khi xe chuẩn bị rẻ phải.', '3 – Để quan sát an toàn phía sau và cả bên trái và bên phải trước khi chuyển hướng.', '4 – Để quan sát an toàn phía trước  cả bên trái và bên phải trước khi chuyển hướng.', 3, '0'),
(4, 268, 0, ' Để đảm bảo an toàn khi tham gia giao thông, người lái xe lái xe mô tô hai bánh cần điều khiển tay ga như thế nào trong các trường hợp dưới đây?', '1 – Tăng ga thật nhanh, giảm ga từ từ.', '2 – Tăng ga thật nhanh, giảm ga thật nhanh.', '3 – Tăng ga từ từ, giảm ga thật nhanh.', '4 – Tăng ga từ từ, giảm ga từ từ.', 3, '0'),
(4, 269, 0, ' Kỹ thuật cơ bản để giữu thăng bằng khi điều khiển xe mô tô đi trên đường gồ ghề như thế nào trong các trường hợp dưới đây?', '1 – Đứng thẳng trên giá gác chân lái sau đó hơi gập đầu gối và khuỷu tay, đi chậm để không nẩy quá mạnh.', '2 – Ngồi lùi lại phía sau, tăng ga vượt nhanh qua đoạn đường xóc.', '3 – Ngồi lệch sang bên trái hoặc bên phải để lấy thăng bằng qua đoạn đường gồ ghề.', 'Phần 5.', 1, '0'),
(5, 270, 0, ' Chủ phương tiên cơ giới đường bộ có được tự ý thay đổi màu sơn, nhãn hiệu hoặc các đặc tính kỹ thuật của phương tiện so với chứng nhận đăng ký xe hay không?', '1 – Được phép that đổi bằng cách dán đề can với màu sắc phù hợp.', '2 – Không được phép thay đổi.', '3 – Tùy từng loại phương tiện cơ giới đường bộ.', '', 2, '0'),
(5, 271, 0, ' Xe ô tô tham gia giao thông đường bộ phải bảo đảm các quy định về chất lượng, an toàn kỹ thuật và bảo vệ môi trường nào ghi dưới đây?', '1 – Kính chăn gió, kính cửa phải là loại kính an toàn, bảo đảm tầm nhìn cho người điều khiển; có đủ hệ thống hãm và hệ thống chuyển hướng có hiệu lực, tay lái của xe ô tô wor bên trái của xe, có còi với âm lượng đúng quy chuẩn kỹ thuật.', '2 – Có đủ đèn chiếu sang gần và xa, đèn soi biển số, đèn báo hãm, đèn tín hiệu; có đủ bộ phận giảm thanh, giảm khói, các kết cấu phải đủ độ bền và bảo đảm tính năng vận hành ổn định.', '3 – Cả ý 1 và ý 2.', '', 3, '0'),
(5, 272, 0, ' Xe mô tô và xe ô tô tham gia giao thông trên đường bộ phải bắt buộc có đủ bộ phận giảm thanh không?', '                     1 – Không bắt buộc.', '2 – Bắt buộc.', '3 – Tùy trừng trường hợp.', '', 2, '0'),
(5, 273, 0, ' Xe ô tô tham gia giao thông trên đường bộ phải có đủ các loại đèn gì?', '1 – Đèn chiếu sang gần và xa.', '2 – Đén soi biển số; đền báo hãm và đèn tín hiệu.', '3 – Dàn đèn pha trên nóc xe.', '4 – Cả ý 1 và ý 2.', 4, '0'),
(5, 274, 0, ' Kính chắn gió của ô tô phải đảm bảo yêu cầu nào dưới đây?', '1 – Là loại kính an toàn, kính nhiều lớp, đúng quy cách, không rạn nứt, đảm bảo hình ảnh quan sát rõ ràng, không bị méo mó.', '2 – Là loại kính trong suốt, đúng quy cách, không rạn nứt, đảm bảo tầm nhìn cho người điều khiển về phía trước mặt và hai bên.', '', '', 1, '0'),
(5, 275, 0, ' Bánh xe lắp cho xe ô tô phải đảm bảo an toàn kỹ thuật như thế nào dưới đây?', '1 – Đủ số lượng, đủ áp suất, đúng cỡ lốp của nhà sản xuất hoặc tài liệu kỹ thuật quy định; lốp bánh đãn hướng hau bên cùng kiểu hoa lốp, chiều cao hoa lốp đồng đều; không sử dụng lốp đắp, lốp không mòn đến đáu chỉ báo độ mòn của nhà sản xuất, không nứt, vỡ, phồng rộp làm hở lớp sợi mành.', '2 – Vành, đĩa vành đúng kiểu loại, không rạn, nứt, cong vênh; bánh xe quay trơn, không bị bó kẹt hoặc cọ sát vào phần khác; moay ở không bị rơ; lắp đặt chắc chắn, đủ các chi tiết kẹp chặt và phòng lỏng.', '3 – Cả ý 1 và ý 2.', '', 3, '0'),
(5, 276, 0, ' Âm lượng của còi điện lắp đặt trên ô tô (đo ở độ cao 1,2 mét với khoảng cách 2 mét tính từ đầu xe) là bao nhiều?', '1 – Không nhỏ hơn 90 dB (A), không lớn hơn 115 dB (A).', '2 – Không nhỏ hơn 80 dB (A), không lớn hơn 105 dB (A).', '3 – Không nhỏ hơn 70 dB (A), không lớn hơn 90 dB (A).', '', 1, '0'),
(5, 277, 0, ' Mục đích của bảo dưỡng thường xuyên đối với xe ô tô có tác dụng gì?', '1 – Bảo dưỡng ô tô thường xuyên làm cho ô tô luôn luôn có tính năng kỹ thuật tốt, giảm cường độ hao mòn của các chi tiết, kéo dài tuổi thọ của xe.', '2 – Ngăn ngừa và phát hiện kịp thời các hư hỏng và sai lệch kỹ thuật để khắc phục, giữu gìn được hình thức bên ngoài.', '3 – Cả ý 1 và ý 2.', '', 3, '0'),
(5, 278, 0, ' Trong các nguyên nhân nếu dưới đây, nguyên nhân nào làm động cơ diesel không nổ?', '1 – Hết nhiên liệu, lõi lọc nhiên liệu bị tắc, lọc khí bị tắc, nhiên liệu lẫn không khí, tạp chất.', '2 – Hết nhiên liệu, lõi lọc nhiên liệu bị tắc, lọc khí bị tắc, nhiên liệu lẫn không khí, không có tia lửa điện.', '3 – Hết nhiên liệu, lõi lọc nhiên liệu bị tắc, lọc khí bị tắc, nhiên liệu lẫn không khí và nước, không có tia lửa điện.', '', 1, '0'),
(5, 279, 0, ' Gạt nước lắp trên ô tô đảm bảo yêu cầu an toàn kỹ thuật nào dưới đây?', '1 – Đầy đủ số lượng, lắp đặt chắc chắn, hoạt động bình thường.', '2 – Lưỡi gạt không quá mòn, diện tích quét đảm bảo tầm nhìn của người lái.', '3 – Cả ý 1 và ý 2.', '', 3, '0'),
(5, 280, 0, ' Dây đai an toàn lắp trên ô tô phải đảm bảo yêu cầu an toàn kỹ thuật nào dưới đây?', '1 – Đủ số lượng, lắp đặt chắc chắn không bị tách, đứt, khóa cài đóng, mở nhẹ nhàng, không tự mở, không bị kẹt, kéo ra thu vào dễ dàng, cơ cấu hãm giữ chặt dây khi giật dây đột ngột.', '2 –  Đủ số lượng, lắp đặt chắc chắn không bị tách, đứt, khóa cài đóng, mở nhẹ nhàng, không tự mở, không bị kẹt, kéo ra thu vào dễ dàng, cơ cấu hãm mở ra khi giật dây đột ngột.', '3 – Cả ý 1 và ý 2.', '', 1, '0'),
(5, 281, 0, ' Thế nào là động cơ 4 kỳ?', '1 – Là loại động cơ: để hoàn thành một chu trình công tác của động cơ,pít tông thực hiện 2 (hai) hành trình, trong đó có một lần sinh công.', '2 – Là loại động cơ: để hoàn thành một chu trình công tác của động cơ,pít tông thực hiện 4 (bốn) hành trình, trong đó có một lần sinh công.', '', '', 2, '0'),
(5, 282, 0, ' Công dụng của hệ thống bôi trơn đối với động cơ ô tô?', '1 – Cung cấp một lượng dầu bôi trơn đủ và sạch dưới áp suất nhất định đi bôi trơn cho các chi tiết của động cơ để giảm ma sát, giảm mài mòn, làm kín, làm sạch, làm mát và chống gỉ.', '2 – Cung cấp một lượng nhiên liệu đầy đủ và sạch để cho động cơ ô tô hoạt động.', '3 – Cả ý 1 và ý 2.', '', 1, '0'),
(5, 283, 0, ' Niên hạn sử dụng của ô tô tải (tính bắt đầu từ năm sản xuất) là bao nhiêu năm?', '1 – 15 năm.', '2 – 20 năm.', '3 – 25 năm.', '', 3, '0'),
(5, 284, 0, ' Niên hạn sử dụng của ô tô chở người trên 9 chỗ ngồi (tính bắt đầu từ năm sản xuất) là bao nhiêu năm?', '1 – 5 năm.', '2 – 20 năm.', '3 – 25 năm.', '', 2, '0'),
(5, 285, 0, ' Hãy nêu công dụng của động cơ ô tô?', '1 – Khi làm việc, nhiệt năng được biến đổi thành cơ năng làm trục khuỷu động cơ quay, truyền lực đến các bánh xe chủ động tạo ra chuyển động tính tiến cho ô tô.', '2 – Khi làm việc, cơ năng được biến đổi thành nhiệt năng và truyền đến các bánh xe chủ động tạo ra chuyển động tính tiến cho ô tô.', '3 – Cả ý 1 và ý 2.', '', 1, '0'),
(5, 286, 0, ' Hãy nêu công dụng của hệ thống truyền lực của ô tô?', '1 – Dùng để truyền mô men quay từ động cơ tới các bánh xe chủ động của ô tô.', '2 – Dùng để thay đổi hướng chuyển động hoặc giữ cho ô tô chuyển động ổn định theo hướng xác định.', '3 – Dùng để làm giảm tốc độ, dừng chuyển động của ô tô.', '', 1, '0'),
(5, 287, 0, ' Hãy nêu công dụng ly hợp (côn) của ô tô?', '1 – Dùng để truyển mô men xoắn giữa các trục không cùng nằm trên một đường thẳng và góc lệch trục luôn thay đổi trong quá trình ô tô chuyển động.', '2 – Dùng để truyền hoặc ngắt truyền động từ động cơ đến hộp số của ô tô.', '3 – Dùng để truyền truyền động từ hộp số đến bánh xe chủ động của ô tô.', '', 2, '0'),
(5, 288, 0, ' Hãy nêu công dụng của hộp số ô tô?', '1 – Truyền và tăng mô men xoắn giữa các trục vuông góc nhau, đảm bảo cho các bánh xe chủ động quay với tốc độ khác nhau khi sức cản chuyển động ở bánh xe hai bên không bằng nhau.', '2 – Truyền và thay đổi mô men xoắn giữa các trục không cùng nằm trên một đường thẳng và góc lệch trục luôn thay đổi trong quá trình ô tô chuyển động, chuyển số êm dịu, dễ điều khiển.', '3 – Truyền và thay đổi mô men từ động cơ đến bánh xe chủ động, cắt truyền động từ động cơ đến bánh xe chủ động, đảm bảo cho ô tô chuyển động lùi.', '', 3, '0'),
(5, 289, 0, ' Hãy nếu công dụng hệ thống lái ô tô?', '1 – Dùng để thay đổi mô men từ động cơ tới các bánh xe chủ động khi ô tô chuyển động theo hướng xác định.', '2 – Dùng để thay đổi mô men giữa các trục vuống góc nhau khi ô tô chuyển động theo hướng xác định.', '3 – Dùng để thay đổi hướng chuyển động hoặc giữ cho ô tô chuyển động ôn định theo hướng xác định.', '', 3, '0'),
(5, 290, 0, ' Hãy nêu công dụng hệ thống phanh ô tô?', '1 – Dùng để giảm tốc độ, dừng chuyển động của ô tô và giữ cho ô tô đứng yên trên dốc.', '2 – Dùng để thay dổi hướng chuyển động hoặc giữ cho ô tô chuyển động ổn định theo hướng xác định.', '3 – Dùng để truyền hoặc ngắt truyền động từ động cơ đến bánh xe chủ động của ô tô.', '', 1, '0'),
(5, 291, 0, ' Đèn phanh trên xe ô tô có tác dụng gì?', '1 – Có tác dụng cảnh báo cho các xe phía sau biết xe đang giảm tốc độ để chủ động tránh hoặc giảm tốc để tránh va chạm.', '2 – Có tác dụng định vị vào ban đêm với các xe từ phía sau tới để tránh va chạm.', '3 – Cả ý 1 và ý 2.', '', 3, '0'),
(5, 292, 0, ' Khi động cơ ô tô đã khởi động, bảng đồng hồ xuất hiện ký hiệu như hình vẽ dưới đây, báo hiệu tình trạng như thế nào của ô tô?', '600 Câu Hỏi Lý Thuyết &amp; Đáp Án Thi Sát Hạch Lái Xe Ôtô Mới Nhất 3411 – Nhiệt độ nước làm mát động cơ quá ngưỡng cho phép.', '2 – Áp suất lốp không đủ.', '3 – Đang hãm phanh tay.', '4 – Cần kiểm tra động cơ.', 1, '292'),
(5, 293, 0, ' Khi động cơ ô tô đã khởi động, bảng đồng hồ xuất hiện ký hiệu như hình vẽ dưới đây, báo hiệu tình trạng như thế nào của ô tô?', '600 Câu Hỏi Lý Thuyết &amp; Đáp Án Thi Sát Hạch Lái Xe Ôtô Mới Nhất 3421 – Báo hiệu lỗi hệ thống chống bó cứng khi phanh bị lỗi.', '2 – Áp suất lốp không đủ.', '3 – Đang hãm phanh tay.', '4 – Cần kiểm tra động cơ.', 3, '293'),
(5, 294, 0, ' Khi động cơ ô tô đã khởi động, bảng đồng hồ xuất hiện ký hiệu như hình vẽ dưới đây, báo hiệu tình trạng như thế nào của ô tô?', '600 Câu Hỏi Lý Thuyết &amp; Đáp Án Thi Sát Hạch Lái Xe Ôtô Mới Nhất 3431 – Báo hiệu thiếu dầu phanh.', '2 – Áp suất lốp không đủ.', '3 – Đang hãm phanh tay.', '4 – Sắp hết nhiên liệu.', 2, '294'),
(5, 295, 0, ' Khi động cơ ô tô đã khởi động, bảng đồng hồ xuất hiện ký hiệu như hình vẽ dưới đây, báo hiệu tình trạng như thế nào của ô tô?', '600 Câu Hỏi Lý Thuyết &amp; Đáp Án Thi Sát Hạch Lái Xe Ôtô Mới Nhất 3441 – Báo hiệu hệ thống chống bó cứng khi phanh bị lỗi.', '2 – Áp suất lốp không đủ.', '3 – Đang hãm phanh tay.', '4 – Sắp hết nhiên liệu.', 1, '295'),
(5, 296, 0, ' Khi động cơ xe số tự động có trang bị chìa khóa thông minh có cần đạp hết hành trình bàn đạp của phanh?', '600 Câu Hỏi Lý Thuyết &amp; Đáp Án Thi Sát Hạch Lái Xe Ôtô Mới Nhất 3451 – Phải đạp hết hành trình bàn đạp chân phanh.', '2 – Không cần đạp phanh.', '3 – Tùy từng trường hợp.', '', 1, '296'),
(5, 297, 0, ' Ắc quy được trang bị trên xe ô tô có tác dụng gì?', '1 – Giúp người lái xe kịp thời tạo xung lực tối đa lên hệ thống phanh trong khoảnh khắc đầu tiên của tình huống khẩn cấp.', '2 – Ổn định chuyển động của xe ô tô khi vào đường vòng.', '3 – Hỗ trợ người lái xe khởi hành ngang đốc.', '4 – Để tích trữ điện năng, cung cấp cho các phụ tải khia máy phát chưa làm việc.', 4, '0'),
(5, 298, 0, ' Máy phát điện được trang bị trên xe ô tô có tác dụng gì?', '1 – Để phát điện năng cung cấp cho các phụ tải làm việc và nạp điện cho ắc quy.', '2 – Ổn định chuyển động của xe ô tô khi đi vào đường vòng.', '3 – Hỗ trợ người lái xe khởi hành ngang dốc.', '4 – Để tích trữ điện năng và cung cấp điện cho các phụ tải làm việc.', 1, '0'),
(5, 299, 0, ' Dây đai an toàn được trang bị trên xe ô tô có tác dụng gì?', '1 – Ổn định chuyển động của xe ô tô khi đi vào đường vòng.', '2 – Giữ chặt người lái và hành khách trên ghế ngồi khi xe ô tô đột ngột dừng lại.', '3 – Để tích trữ điện năng và cung cấp điện cho các phụ tải làm việc.', '', 2, '0'),
(5, 300, 0, ' Túi khí được trang bị trên xe ô tô có tác dụng gì?', '1 – Giữ chặt người lái và hành khách trên ghế ngồi khi xe ô tô đột ngột dừng lại.', '2 – Giảm khả năng va đập của một số bộ phận cơ thể quan trọng với các vật thể trong xe.', '3 – Hấp thụ một phần lực va đập lên người lái và hành khách.', '4 – Cả ý 2 và ý 3.', 4, '0'),
(5, 301, 0, ' Khi động cơ ô tô đã khởi động, bảng đồng hồ xuất hiện ký hiệu như hình vẽ dưới đây không tắt trong thời gian dài, báo hiệu tình trạng như thế nào của ô tô?', '1 – Nhiệt độ nước làm mát động cơ quá ngưỡng cho phép.', '2 – Áp suất lốp không đủ.', '3 – Đang hãm phanh tay.', '4 – Hệ thống lái gặp trục trặc.', 4, '301'),
(5, 302, 0, ' Trong xe ô tô có trang bị thiết bị như hình vẽ có tác dụng gì?', '1 – Dùng để kích (hay nâng) xe ô tô.', '2 – Vặn ốc lắp bánh xe.', '3 – Đang hãm phanh tay.', '4 – Hệ thống lái gặp trục trặc.', 1, '302'),
(5, 303, 0, ' Trên xe ô tô có trang bị như hình vẽ, dùng để làm gì?', '1 – Thay lốp xe.', '2 – Chũa cháy.', '3 – Phá cửa kính xe ô tô trong các trường hợp4 – Vặn ốc để tháo lắp bánh xe.', '', 3, '303'),
(5, 304, 0, ' Trên xe ô tô có trang bị như hình vẽ, dùng để làm gì?', '1 – Thay lốp xe.', '2 – Chữa cháy trong các trường hợp hỏa hoạn.', '3 – Pha cửa kính xe ô tô trong các trường hợp khẩn cấp.', '4 – Cầm máu cho người bị nạnPhần 6.', 2, '304'),
(6, 305, 0, ' Biển nào cấm các loại xe cơ giới đi vào, trừ xe gắn máy, mô tô hai bánh và các loại xe ưu tiên theo luật định?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 1 và 3.', '4 – Cả ba biển.', 1, '305'),
(6, 306, 0, ' Biển nào cấm ô tô tải?', '1 – Cả ba biển.', '2 – Biển 2 và 3.', '3 – Biển 1 và 3.', '', 4, '306'),
(6, 307, 0, ' Biển nào cấm xe máy kéo?', '1 – Biển 1.', '2 – Biển 2 và 3.', '3 – Biển 1 và 3.', '4 – Cả ba biển.', 2, '307'),
(6, 308, 0, ' Biển nào báo hiệu cấm xe mô tô ba bánh đi vào?', '1 – Biển 1 và 2.', '2 – Biển 1 và 3.', '3 – Biển 2 và 3.', '', 1, '308'),
(6, 309, 0, ' Biển nào dưới đây xe gắn máy được phép đi vào?', '1 – Biển 1.', '2 – Biển 2.', '', '', 3, '309'),
(6, 310, 0, ' Biển nào báo hiệu cấm xe mô tô hai bánh đi vào?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 1, '310'),
(6, 311, 0, ' khi gặp biển nào thì xe mô tô hai bánh được đi vào?', '1 – Không biển nào.', '2 – Biển 1 và 2.', '3 – Biển 2 và 3.', '4 – Cả 3 biển.', 3, '311'),
(6, 312, 0, ' Biển nào cho phép ô tô con được vượt?', '1 – Biển 1 và 2.', '2 – Biển 2.', '3 – Biển 1 và 3.', '4 – Biển 2 và 3.', 3, '312'),
(6, 313, 0, ' Biển nào không cho phép ô tô con vượt?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 2, '313'),
(6, 314, 0, ' Biển nào cấm ô tô tái vượt?', '1 – Biển 1.', '2 – Biển 1 và 2.', '3 – Biển 1 và 3.', '4 – Biển 2 và 3.', 4, '314'),
(6, 315, 0, ' Biển nào cấm xe tải vượt?', '1 – Biển 1.', '2 – Biển 2.', '3 – Cả hai biển.', '', 3, '315'),
(6, 316, 0, ' Biển nào xe ô tô con được phép vượt?', '1 – Biển 1.', '2 – Biển 2.', '', '', 2, '316'),
(6, 317, 0, ' Biển nào cấm quay xe?', '1 – Biển 1.', '2 – Biển 2.', '3 – Không biển nào.', '4 – Cả hai biển.', 2, '317'),
(6, 318, 0, ' Biển nào cấm xe rẽ trái?', '1 – Biển 1.', '2 – Biển 2.', '3 – Cả hai biển.', '', 1, '318'),
(6, 319, 0, ' Khi gặp biển nào xe được rẽ trái?', '1 – Biển 1.', '2 – Biển 2.', '3 – Không biển nào.', '', 2, '319'),
(6, 320, 0, ' Biển nào cấm ô tô rẽ trái?', '1 – Biển 1.', '2 – Biển 2.', '3 – Cả hai biển.', '', 3, '320'),
(6, 321, 0, ' Biển nào cấm các phương tiện giao thông đường bộ rẽ phải?', '1 – Biển 1 và 2.', '2 – Biển 1 và 3.', '3 – Biển 2 và 3.', '4 – Cả ba biển.', 1, '321'),
(6, 322, 0, ' Biển nào cấm các phương tiện giao thông đường bộ rẽ trái?', '1 – Biển 1 và 2.', '2 – Biển 1 và 3.', '3 – Biển 2 và 3.', '4 – Cả ba biển.', 1, '322'),
(6, 323, 0, ' Biển nào cấm ô tô quay đầu?', '1 – Biển 1 và 2.', '2 – Biển 1 và 3.', '3 – Biển 2 và 3.', '4 – Không biển nào.', 1, '323'),
(6, 324, 0, ' Biển nào cấm ô tô rẽ phải và quay đầu xe?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '4 – Biển 1 và 3.', 3, '324'),
(6, 325, 0, ' Biển nào cấm xe taxi mà không cấm các phương tiện khác?', '1 – Biển 1.', '2 – Biển 2.', '3 – Không biển nào.', '', 2, '325'),
(6, 326, 0, ' Biển nào cho phép xe rẻ trái?', '1 – Biển 1.', '2 – Biển 2.', '3 – Không biển nào.', '', 2, '326'),
(6, 327, 0, ' Biển nào xe quay đầu không bị cấm?', '1 – Biển 1.', '2 – Biển 2.', '3 – Cả 2 biển.', '', 3, '327'),
(6, 328, 0, ' Biển nào được phép quay đầu nhưng không được rẻ trái?', '1 – Biển 1.', '2 – Biển 2.', '3 – Cả 2 biển.', '', 1, '328'),
(6, 329, 0, ' Biển nào là biển ”Cấm đi ngược chiều”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Cả ba biển.', '', 2, '329'),
(6, 330, 0, ' Biển nào dưới đây các phương tiện không được phép đi vào?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 1 và 3.', '', 3, '330'),
(6, 331, 0, ' Gặp biển nào người lái xe không được đổ xe vào ngày chẵn?', '600 Câu Hỏi Lý Thuyết &amp; Đáp Án Thi Sát Hạch Lái Xe Ôtô Mới Nhất 3761 – Biển 1.', '2 – Biển 1 và 3.', '3 – Biển 2 và 3.', '4 – Biển 3.', 2, '331'),
(6, 332, 0, ' Gặp biển nào người lái xe được đổ xe vào ngày lẻ?', '1 – Biển 1 và 2.', '2 – Biển 2.', '3 – Biển 2 và 3.', '4 – Biển 3.', 1, '332'),
(6, 333, 0, ' Khi gặp biển nào xe ưu tiên theo luật định vẫn phải dừng lại?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 2, '333'),
(6, 334, 0, ' Biển nào cấm tất cả các loại xe cơ giới và thô sơ đi vào trên đường, trừ xe ưu tiên theo luật định (nếu đường vẫn cho xe chạy được)?', '1 – Biển 1.', '2 – Biển 2.', '3 – Cả hai biển.', '', 1, '334'),
(6, 335, 0, ' Biển nào là biển “Cấm xe chở hàng nguy hiểm”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 3, '335'),
(6, 336, 0, ' Gặp biển nào xe xích lô được phép đi vào?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '4 – Biển 1 và 2.', 4, '336'),
(6, 337, 0, ' Gặp biển nào xe lam, xe xích lô máy được phép đi vào?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 3, '337'),
(6, 338, 0, ' Biển báo này có ý nghĩa gì?', '1 – Đường cấm súc vật vận tải hàng hóa2 – Đường cấm súc vật vận tải hành khách.', '3 – Đường cấm súc vật vận tải hàng hóa hoặc hành khách dù kéo xe hay chở trên lung đi qua.', '', '', 3, '338'),
(6, 339, 0, ' Biển báo này có ý nghĩa như thế nào?', '1 –Tốc độ tối đa cho phép về ban đêm cho các phương tiện là 70 km/h.', '', 'âu 339/ Biển báo này có ý nghĩa như thế nào?1 –Tốc độ tối đa cho phép về ban đêm cho các phương tiện là 70 km/h.', '', 1, '339'),
(6, 340, 0, ' Khi gặp các biển này xe ưu tiên theo luật định (có tải trọng hay chiều cao toàn bộ vượt quá chỉ số ghi trên biển) có được phép đi qua hay không?', '1 – Được phép.', '2 – Không được phép.', '', '', 2, '340'),
(6, 341, 0, ' Biển nào hạn chế chiều cao của xe và hàng?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 1, '341'),
(6, 342, 0, ' Biển số 2 có ý nghĩa như thế nào?', '1 – Cho phép ô tô có tải trọng trcuj lớn hơn 7 tán đi qua.', '2 – Cho phép ô tô có tải trọng trên trục xe từ 7 tấn trở xuống đi qua.', '', '', 2, '342'),
(6, 343, 0, ' Biển 3 có ý nghĩa như thế nào?', '1 – Cấm các loại xe có tải trọng toàn bộ trên 10 tấn đi qua.', '2 – Hạn chế khối lượng hàng hóa chở trên xe.', '3 – Hạn chế tải trọng trên trục xe.', '', 1, '343'),
(6, 344, 0, ' Biển nào cấm máy kéo kéo theo rơ mooc?', '1 – Biển 1.', '2 – Biển 2.', '3 – Cả hai biển.', '', 3, '344'),
(6, 345, 0, ' Khi gặp biển 1, xe ô tô tải có được phép đi vào không?', '1 – Được đi vào.', '2 – Không được đi vào.', '', '', 1, '345'),
(6, 346, 0, ' Biển nào không có hiệu lực đối với ô tô tải không kéo mooc?', '1 – Biển 1 và 2.', '2 – Biển 2 và 3.', '3 – Biển 1 và 3.', '4 – Cả ba biển.', 1, '346'),
(6, 347, 0, ' Biển nào cấm máy kéo?', '1 – Biển 1 và 2.', '2 – Biển 1 và 3.', '3 – Biển 2 và 3.', '4 – Cả ba biển.', 3, '347'),
(6, 348, 0, ' Khi gặp biển này, xe mô tô ba bánh có được phép rẻ trái hoặc rẽ phải hay không?', '1 – Được phép.', '2 – Không được phép.', '', '', 2, '348'),
(6, 349, 0, ' Biển này có hiệu lực đối với xe mô tô hai, ba bánh không?', '1 – Có.', '2 – Không.', '', '', 1, '349'),
(6, 350, 0, ' Biển này có ý nghĩa gì?', '1 – Cấm xe cơ giới (trừ xe ưu tiên theo luật định) đi thẳng.', '2 – Cấm xe ô tô và mô tô (trừ xe ưu tiên theo luật định) đi về bên trái và bên phải.', '3 – Hướng trái và phải không cấm xe cơ giới.', '', 2, '350'),
(6, 351, 0, ' Biển phụ đặt dưới biển cấm bóp còi có ý nghĩa gì?', '1 – Báo khoảng cách đến nơi cấm bóp còi.', '2 – Chiều dài đoạn đường cấm bóp còi từ nơi đặt biển.', '3 – Báo cấm dung còi có độ vang xa 500 m.', '', 2, '351'),
(6, 352, 0, ' Chiều dài đoạn đường 500 m từ nơi đặt biển này, người lái xe có được phép bấm còi không?', '1 – Được phép.', '2 – Không được phép.', '', '', 2, '352'),
(6, 353, 0, ' Biển nào xe mô tô hai bánh được đi vào?', '1 – Biển 1 và 2.', '2 – Biển 1 và 3.', '3 – Biển 2 và 3.', '', 2, '353'),
(6, 354, 0, ' Biển nào xe mô tô hai bánh không được đi vào?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 2, '354'),
(6, 355, 0, ' Ba biển này có hiệu lực như thế nào?', '1 – Cấm các loại xe ở biển phụ đi vào.', '2 – Cấm các loại xe cơ giới đi vào trừ loại xe ở biển phụ.', '', '', 1, '355'),
(6, 356, 0, ' Biển nào báo hiệu chiều dài đoạn đường phải giữu cự ly tối thiểu giữa hai xe?', '1 – Biển 1.', '2 – Biển 2.', '3 – Cả ba biển.', '', 1, '356'),
(6, 357, 0, ' Biển nào báo hiệu khoảng cách thực tế từ nơi đặt biển đến nơi cần cự ly tối thiểu giữa hai xe?', '1 – Biển 1.', '2 – Biển 2.', '3 – Cả ba biển.', '', 2, '357'),
(6, 358, 0, ' Biển này có ý nghĩa gì?', '1 – Cấm dừng xe về hướng bên trái.', '2 – Cấm đỗ xe và cấm dừng xe theo hướng bên phải.', '3 – Được phép đỗ xe và dừng xe theo hướng bên phải.', '', 2, '358'),
(6, 359, 0, ' Theo hướng bên phải có được phép đỗ xe, dừng xe không?', '1 – Không được phép.', '2 – Được phép.', '', '', 1, '359'),
(6, 360, 0, ' Gặp biển này, xe ô tô sơ mi rơ mooc có chiều dài toàn bộ kể cả xe, mooc và hàng lớn hơn trị sô ghi trên biển có được phép đi vào không?', '1 – Không được phép.', '2 – Được phép.', '', '', 1, '360'),
(6, 361, 0, ' Xe ô tô chở hàng vượt quá phía trước và sau thùng xe, mỗi phía quá 10% chiều dài toàn bộ than xe, tổng chiều dài xe (cả hàng) từ trước đến sau nhỏ hơn trị số ghi trên biển thì có được phép đi vào không?', '1 – Không được phép.', '2 – Được phép.', '', '', 1, '361'),
(6, 362, 0, ' Biển này có ý nghĩa gì?', '1 – Cấm ô tô buýt.', '2 – Cấm ô tô chở khách.', '3 – Cấm ô tô con.', '', 2, '362'),
(6, 363, 0, ' Biển này có ý nghĩa gì?', '1 – Hạn chế chiều cao của xe và hàng.', '2 – Hạn chế chiều ngang của xe và hàng.', '3 – Hạn chế chiều dài của xe và hàng.', '', 2, '363'),
(6, 364, 0, ' Biển nào là biển “Tốc độ tối đa cho phép về ban đêm”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Cả hai biển.', '', 1, '364'),
(6, 365, 0, ' Biển báo nào báo hiệu bắt đầu đoạn đường vào phạm vi khu dân cư, các phương tiện tham gia giao thông phải tuân thủ các quy định đi đường được áp dụng ở khu đông dân cư?', '1 – Biển 1.', '2 – Biển 2.', '', '', 1, '365'),
(6, 366, 0, ' Biển nào báo hiệu hạn chế tốc độ của phương tiện không vượt quá trị số ghi trên biển?', '1 – Biển 1.', '2 – Biển 2.', '', '', 2, '366'),
(6, 367, 0, ' Trong các biển báo dưới đây biển nào báo hiệu “Hết đường cao tốc”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 2, '367'),
(6, 368, 0, ' Số 50 trên biển báo dưới đây có ý nghĩa gì?', '1 – Tốc độ tối đa các xe cơ giới được phép chạy.', '2 – Tốc độ tối thiểu các xe cơ giới được phép chạy.', '', '', 1, '368'),
(6, 369, 0, ' Trong các biển báo dưới đây biển nào chỉ dẫn bắt đầu đường cao tốc?', '1 – Biển 1.', '2 – Biển 2.', '3 – Cả biển 1 và biển 2.', '', 2, '369'),
(6, 370, 0, ' Biển báo náy có ý nghĩa là gì?', '1 – Báo hiệu tốc độ tối đa cho phép các xe cơ giới chạy.', '2 – Báo hiệu tốc độ tối thiểu cho phép các xe cơ giới chạy.', '', '', 2, '370'),
(6, 371, 0, ' Gặp biển nào người lái xe phải nhường đường cho người đi bộ?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '4 – Biển 1 và 3.', 1, '371'),
(6, 372, 0, ' Biển nào chỉ đường dành cho người đi bộ, các loại xe không được đi vào khi gặp biển này?', '1 – Biển 1.', '2 – Biển 1 và 3.', '3 – Biển 3.', '4 – Cả ba biển.', 3, '372'),
(6, 373, 0, ' Biển nào báo hiệu “Đường dành cho xe thô sơ”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 1, '373'),
(6, 374, 0, ' Biển nào báo hiệu sắp đến chỗ giao nhau nguy hiểm?', '1 – Biển 1.', '2 – Biển 1 và 2.', '3 – Biển 2 và 3.', '4 – Cả ba biển.', 4, '374'),
(6, 375, 0, ' Biển nào báo hiệu “Giao nhau với đường sắt có rào chắn”?', '1 – Biển 1.', '2 – Biển 2 và 3.', '3 – Biển 3.', '', 1, '375'),
(6, 376, 0, ' Biển nào báo hiệu “Giao nhau có tín hiệu đèn”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '4 – Cả ba biển.', 3, '376'),
(6, 377, 0, ' Biển nào báo hiệu nguy hiểm giao nhau với đường sắt?', '1 – Biển 1 và 2.', '2 – Biển 1 và 3.', '3 – Biển 2 và 3.', '4 – Cả ba biển.', 2, '377'),
(6, 378, 0, ' Biển nào báo hiệu đường sắt giao nhau với đường bộ không có rào chắn?', '1 – Biển 1 và 2.', '2 – Biển 1 và 3.', '3 – Biển 2 và 3.', '4 – Cả ba biển.', 3, '378'),
(6, 379, 0, ' Biển nào báo hiệu sắp đến chỗ giao nhau giữa đường bộ và đường sắt?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '4 – Biển 1 và 3.', 1, '379'),
(6, 380, 0, ' Biến nào báo hiệu “Cửa chui”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 2, '380'),
(6, 381, 0, ' Hai biển này có ý nghĩa gì?', '1 – Để chỉ nơi đường sắt giao vuông góc với đường bộ không có rào chắn.', '2 – Để báo trước sắp đến vị trí giao cắt đường bộ với đường sắt cùng mức, không vuông góc và không có người gác, không có rào chắn.', '3 – Nơi đường sắt giao nhau với đường bộ.', '', 1, '381'),
(6, 382, 0, ' Biển nào báo hiệu “Nơi đường sắt giao vuông góc với đường bộ”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '4 – Biển 1 và 2.', 4, '382'),
(6, 383, 0, ' Các biển này có ý nghĩa gì?', '1 – Nơi đường sắt giao nhau với đường bộ.', '2 – Nơi đường sắt giao vuông góc với đường bộ.', '3 – Để báo trước sắp đến vị trí đường sắt giao không vuông góc với đường bộ, không có người gác và không có rào chắn.', '', 3, '383'),
(6, 384, 0, ' Biển nào báo hiệu “Hết đoạn đường ưu tiên”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 3, '384'),
(6, 385, 0, ' Biển nào báo hiệu, chỉ dẫn xe đi trên đường này được quyền ưu tiên qua nơi giao nhau?', '1 – Biển 1 và 2.', '2 – Biển 1 và 3.', '3 – Biển 2 và 3.', '4 – Cả ba biển.', 2, '385'),
(6, 386, 0, ' Biển nào báo hiệu “Giao nhau với đường không ưu tiên”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '4 – Biển 2 và 3.', 1, '386'),
(6, 387, 0, ' Biển nào báo hiệu “Giao nhau với đường ưu tiên”?', '1 – Biển 1 và 3.', '2 – Biển 2.', '3 – Biển 3.', '', 2, '387'),
(6, 388, 0, ' Biển nào báo hiệu “Đường bị thu hẹp”?', '1 – Biển 1 và 2.', '2 – Biển 1 và 3.', '3 – Biển 2 và 3.', '4 – Cả ba biển.', 1, '388'),
(6, 389, 0, ' Khi gặp biển nào, người lái xe phải giảm tốc độ, chú ý xe đi ngược chiều, xe đi ở phía đường bị hẹp phải nhường đường cho xe đi ngược chiều?', '1 – Biển 1.', '2 – Biển 2 và 3.', '3 – Biển 2 và 3.', '4 – Cả ba biển.', 3, '389'),
(6, 390, 0, ' Biển nào báo hiệu “Giao nhau với đường ưu tiên”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '4 – Cả ba biển.', 3, '390'),
(6, 391, 0, ' Biển nào báo hiệu “Đường giao nhau” của các tuyến đường cùng cấp?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 1, '391'),
(6, 392, 0, ' Biển nào báo hiệu “Giao nhau với đường không ưu tiên”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 2, '392'),
(6, 393, 0, ' Biển nào báo hiệu “Đường hai chiều”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 1, '393'),
(6, 394, 0, ' Biển nào báo hiệu phải giảm tốc độ, nhường đường cho xe cơ giới đi ngược chiều qua đường hẹp?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 2, '394'),
(6, 395, 0, ' Biển nào chỉ dẫn “Được ưu tiên qua đường hẹp”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '4 – Biển 2 và 3.', 3, '395'),
(6, 396, 0, ' Biển nào báo hiệu “Đường đôi”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 2, '396'),
(6, 397, 0, ' Biển nào báo hiệu “Đường đôi”?', '1 – Biển 1,2 – Biển 2.', '3 – Biển 3.', '', '', 3, '397'),
(6, 398, 0, ' Biển nào báo hiệu ”Kết thúc đường đôi”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 3, '398'),
(6, 399, 0, ' Biển nào báo hiệu “Giao nhau với đường hai chiều”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 1, '399'),
(6, 400, 0, ' Biển nào báo hiệu “Đường hai chiều”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 2, '400'),
(6, 401, 0, ' Biển nào báo hiệu “Giao nhau với đường hai chiều”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', 'Câu 401/  Biển nào báo hiệu “ Giao nhau với đường hai chiều”?1 – Biển 1.', 2, '401'),
(6, 402, 0, ' Biển nào báo hiệu “Chú ý chướng ngại vật”?', '1 – Biển 1.', '2 –  Biển 2 và 3.', '3 –  Cả ba biển.', '', 2, '402'),
(6, 403, 0, ' Biển nào chỉ dẫn cho người tham gia giao thông biết vị trí và khoảng cách có làn đường cứu nạn hay làn thoát xe khẩn cấp?', '1 – Biển 1.', '2 – Biển 2.', '3 – Cả hai biển.', '', 2, '403'),
(6, 404, 0, ' Biển nào báo hiệu “Đường hầm”?', '1 – Cả 3 biển.', '2 – Biển 2.', '3 – Biển 2 và 3.', '', 2, '404'),
(6, 405, 0, '  Biển nào dưới đây là biển “Cầu hẹp”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 2, '405'),
(6, 406, 0, ' Biển nào dưới đây là biển “ Cầu xoay – cầu cất”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 3, '406'),
(6, 407, 0, ' Biển nào dưới đây là biển “ Kè, vực sâu phía trước”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 1, '407'),
(6, 408, 0, ' Biển nào sau đây là biển “ Kè, vực sâu bên đường phía bên trái”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '4 – Biển 1 và Biển 2.', 3, '408'),
(6, 409, 0, ' Biển nào sau đây là biển “ Kè, vực sâu bên đường phía bên phải”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 2, '409'),
(6, 410, 0, ' Biển nào sau đây là biển “ Đường trơn”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 2, '410'),
(6, 411, 0, ' Biển nào sau đây là biển “ Lề đường nguy hiểm”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 2, '411'),
(6, 412, 0, ' Biển nào sau đây báo trước gần tới đoạn đường đang tiến hành thi công?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '4 – Không biển nào.', 1, '412'),
(6, 413, 0, '  Biển nào sau đây cảnh báo nguy hiểm đoạn đường thường xảy ra tai nạn?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 2, '413'),
(6, 414, 0, ' Biển nào báo hiệu đoạn đường thường xảy ra ùn tắc giao thông?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '4 – Cả 3 biển.', 2, '414'),
(6, 415, 0, ' Gặp biển nào người tham gia giao thông phải đi chậm và thận trọng đề phòng khả năng xuất hiện và di chuyển bất ngờ của trẻ em trên mặt đường?', '1 – Biển 1.', '2 – Biển 2.', '', '', 2, '415'),
(6, 416, 0, ' Biển nào chỉ dẫn nới bắt đầu đoạn đường dành cho người đi bộ?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 2, '416'),
(6, 417, 0, ' Biển nào báo hiệu gần đến đoạn đường thường có trẻ em đi ngang qua?', '1 – Biển 1.', '2 – Biển 2.', '.', '4 – Cả 3 biển.', 2, '417'),
(6, 418, 0, ' Gặp biển nào dưới đây người tham gia giao thông cần phải điều chỉnh tốc độ chạy xe cho thích hợp, đề phòng gió thổi mạnh gây lật xe?', '1 – Biển 1.', '2 – Biển 2.', '3 – Cả hai biển.', '', 1, '418'),
(6, 419, 0, ' Biển nào sau đây là biển “ Dốc xuống nguy hiểm”?', '   1 – Biển 1.', '2 – Biển 2.', '', '', 1, '419'),
(6, 420, 0, ' Biển nào sau đây là biển “ Dốc lên nguy hiểm”?', '1 – Biển 1.', '2 – Biển 2.', '', '', 2, '420'),
(6, 421, 0, ' Biển Báo Này Có Ý Ngĩa Gì?', '1 – Chỗ ngoặt nguy hiểm có nguy cơ lật xe bên phải hi đường cong vòng sang tría.', '2 – Chỗ ngoặt nguy hiểm có nguy cơ lật xe bên trái khi đường cong vòng bên phải.', '', '', 1, '421'),
(6, 422, 0, ' Biển báo này có ý nghĩa gì?', '1 – Báo trước đoạn đường có gió ngang.', '2 – Báo trước ddaonj đường trơn trượt.', '3 – Báo trước sắp đến bến phà.', '', 3, '422'),
(6, 423, 0, ' Biển báo này có ý nghĩa gì?', '1 – Báo hiệu đường có ổ gà, lồi lõm.', '2 – Báo hiệu đường có gờ giảm tốc phía trước.', '', '', 1, '423'),
(6, 424, 0, ' Biển báo này có ý nghĩa gì?', '1 – Báo hiệu đường có ổ gà, lồi lõm.', '', 'âu 424/ Biển báo này có ý nghĩa gì?1 – Báo hiệu đường có ổ gà, lồi lõm.', '', 2, '424'),
(6, 425, 0, ' Biển báo này có ý nghĩa gì?', '1 – Để báo trước gần tới đoạn đường có hiện tượng đất đá từ trên ta luy dương sạt lở bất ngờ gây nguy hiểm cho xe cộ và người đi đường.', '2 – Để báo trước nơi có kết cấu mặt đường rời rạc, khi phương tiện đi qua, làm cho các viên đá, sỏi băng lên gây nguy hiểm và mất an toàn cho người và phương tiện tham gai giao thông.', '3 – Để cảnh báo những đoạn nền đường yếu, đoạn đường đang theo dõi lún mà việc vận hành xe ở tốc độ cao có thể gây nguy hiểm.', '', 3, '425'),
(6, 426, 0, ' Biển báo này có ý nghĩa gì?', '1 – Để báo trước gần tới đoạn đường có hiện tượng đất đá từ trên ta luy dương sạt lở bất ngờ gây nguy hiểm cho xe cộ và người đi đường.', '2 – Để báo trước nơi có kết cấu mặt đường rời rạc, khi phương tiện đi qua, làm cho các viên đá, sỏi băng lên gây nguy hiểm và mất an toàn cho người và phương tiện tham gai giao thông.', '3 – Để cảnh báo những đoạn nền đường yếu, đoạn đường đang theo dõi lún mà việc vận hành xe ở tốc độ cao có thể gây nguy hiểm.', '', 1, '426'),
(6, 427, 0, ' Biển báo này có ý nghĩa gì?', '1 – Để báo trước gần tới đoạn đường có hiện tượng đất đá từ trên ta luy dương sạt lở bất ngờ gây nguy hiểm cho xe cộ và người đi đường.', '2 – Để báo trước nơi có kết cấu mặt đường rời rạc, khi phương tiện đi qua, làm cho các viên đá, sỏi băng lên gây nguy hiểm và mất an toàn cho người và phương tiện tham gai giao thông.', '3 – Để cảnh báo những đoạn nền đường yếu, đoạn đường đang theo dõi lún mà việc vận hành xe ở tốc độ cao có thể gây nguy hiểm.', '', 2, '427'),
(6, 428, 0, ' Gặp biển báo này người lái xe phải xử lý thế nào?', '1 – Đi chậm, quan sát và dừng lại nếu gặp gia súc trên đường.', '2 – Bấm còi to để gia súc tránh đường và nhanh chóng di chuyển qua đoạn đường có gia súc.', '', '', 1, '428'),
(6, 429, 0, ' Biển báo này có ý nghĩa gì?', '1 – Báo hiệu khu vực nguy hiểm thường xuyên có sét đánh.', '2 – Báo hiệu khu vực có đường dây điện cắt ngang phía trên tuyến đường.', '', '', 2, '429'),
(6, 430, 0, ' Biển nào báo hiệu các phương tiện pải đi đúng làn đường quy định và tuân thủ tốc độ tối đa cho phép?', '1 – Biển 1.', '2 – Biển 2.', '3 – Cả hai biển.', '', 2, '430'),
(6, 431, 0, ' Biển nào báo hiệu các phương tiện phải tuân thủ tốc độ tối đa cho phép trên từng làn đường?', '1 – Biển 1.', '2 – Biển 2.', '3 – Cả hai biển.', '', 3, '431'),
(6, 432, 0, ' Biển nào báo hiệu “ Đường dành cho xe ô tô”?', '1 – Biển 1.', '2 – Biển 2.', '', '', 1, '432'),
(6, 433, 0, ' Biển nào báo hiệu “ Hết đường dành cho xe ô tô”?', '1 – Biển 1.', '2 – Biển 2.', '', '', 2, '433'),
(6, 434, 0, ' Khi gặp biển  nào thì các phương tiện không được đi vào trừ xe ô tô và mô tô?', '1 – Biển 1.', '2 – Biển 2.', '', '', 1, '434'),
(6, 435, 0, ' Biển này có ý nghĩa gì?', '1 – Chỉ hướng đi phải theo.', '2 – Biển báo hiệu cho người lái xe biết số lượng làn đường trên mặt đường và hướng đi trên mỗi làn đường phải theo.', '3 – Chỉ hướng đường phải theo.', '', 2, '435'),
(6, 436, 0, ' Biển nào ( đặt trước ngã ba, ngã tư) co phép xe được rẽ sang dướng khác?', '1 – Biển 1.', '2 – Biển 2.', '3 – Không biển nào.', '', 3, '436'),
(6, 437, 0, ' Biển nào báo hiệu đường đi thẳng phải theo?', '1 – Biển 1.', '2 – Biển 2.', '', '', 1, '437'),
(6, 438, 0, ' Biển nào báo hiệu “ Đường một chiều”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Cả hai biển.', '', 2, '438'),
(6, 439, 0, ' Trong các biển dưới đây biển nào là biển “ Hết tốc độ tối đa cho phép”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '3 – Cả ba biển.', 1, '439'),
(6, 440, 0, ' Hiệu lực của biển “ Tốc độ tối đa cho phép” hết tác dụng khi gặp biển nào dưới đây?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '4 – Biển 1 và 2.', 4, '440'),
(6, 441, 0, ' Trong các biển dưới đây biển nào là biển “ Hết tốc độ tối thiểu”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '3 – Cả ba biển.', 3, '441'),
(6, 442, 0, ' Biển nào dưới đây báo hiệu hết đường cấm vượt?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '4 – Biển 2 và 3.', 4, '442'),
(6, 443, 0, ' Trong các biển dưới đây biển nào là biển “ Hết mọi lệnh cấm”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '3 – Cả ba biển.', 2, '443'),
(6, 444, 0, ' Biển nào cho phép được quay đầu xe đi theo hướng ngược lại khi đặt biển trước ngã ba, ngã tư?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '4 – Không biển nào.', 3, '444'),
(6, 445, 0, ' Biển nào không cho phép rẻ phải?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '4 – Biển 1 và 3.', 1, '445'),
(6, 446, 0, ' Khi đến chổ giao nhau, gặp biển nào thì người lái xe không được cho xe đi thẳng, phải rẽ sang hướng khác?', '1 – Biển 1 và 2.', '2 – Biển 1 và 3.', '3 – biển 2 và 3.', '4 – Cả ba biển.', 1, '446'),
(6, 447, 0, ' Biển nào cho phép quay đầu xe?', '1 – Biển 1.', '2 – Biển 2.', '3 – Cả hai biển.', '', 3, '447'),
(6, 448, 0, '  Biển nào chỉ dẫn tên đường trên các tuyến đường đối ngoại?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '4 – Biển 1 và 2.', 3, '448'),
(6, 449, 0, ' Biển 1 có ý nghĩa gì?', '1 – Biển chỉ dẫn hết cấm đỗ xe theo giờ trong khu vực.', '2 – Biển chỉ dẫn hết hiệu lực khu vực đỗ xe trên các tuyến đường đối ngoại.', '3 – Biển chỉ dẫn khu vực đỗ xe trên các tuyến đường đối ngoại.', '', 1, '449'),
(6, 450, 0, ' Biển 3 có ý nghĩa gì?', '1 – Biễn chỉ dẫn khu vực cấm đỗ xe trên các tuyến đường đối ngoại2 – Biển chỉ dẫn khu vực đỗ xe trên các tuyến đường đối ngoại.', '3 – Biển hạn chế tốc độ tối đa trong khu vực.', '4 – Biển chỉ dẫn hết hiệu lực khu vực cấm đỗ xe theo giờ trên các tuyến đường đối ngoại.', '', 3, '450'),
(6, 451, 0, ' Biển nào báo hiệu “Đường phía trước có làn đường dành cho ô tô khách”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 2, '451'),
(6, 452, 0, ' Biển nào báo hiệu” Rẽ ra đường có làn đường dành cho ô tô khách”?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 3, '452'),
(6, 453, 0, ' Biển nào đặt trên đường chính trước khi đến nơi đường giao nhau để rẽ vào đường cụt?', '1 –  Biển 1 và 2.', '2 – Cả ba biển.', '3 – Không biển nào.', '', 1, '453'),
(6, 454, 0, ' Biển nào chỉ dẫn cho người đi bộ sử dụng cầu vượt qua đường?', '1 – Biển 1.', '2 – Biển 2.', '3 – Cả 2 biển.', '4 – Không biển nào.', 1, '454'),
(6, 455, 0, ' Biển nào chỉ dẫn cho người đi bộ sử dụng hầm chui qua đường?', '1 – Biển 1.', '2 – Biển 2.', '3 – Cả 2 biển.', '4 – Không biển nào.', 2, '455'),
(6, 456, 0, ' Biển nào báo hiệu nơi đỗ xe cho người tàn tật?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 2, '456'),
(6, 457, 0, ' Gặp biển báo này người lái xe phải đỗ xe như thế nào?', '1 – Đõ xe hoàn toàn trên hè phố.', '2 – Đỗ xe hoàn toàn dưới lòng đường.', '3 – Đỗ ½ thân xe trở lên trên hè phố.', '', 3, '457'),
(6, 458, 0, ' Gặp biển báo này, người tham gia thông phải xử lý như thế nào?', '1 – Dừng xe tại khu vực có trạm Cảnh sát giao thông.', '2 – Tiếp tục lưu thông với tốc độ bình thường.', '3 – Phải giảm tốc độ đến mức an toàn không được vượt khi đi qua khu vực này.', '', 3, '458'),
(6, 459, 0, ' Gặp biển báo này người lái xe có bắt buộc phải chạy vòng theo đảo an toàn theo hướng mũi tên khi muốn chuyển hướng hay không?', '1 – Bắt buộc.', '2 – Không bắt buộc.', '', '', 1, '459'),
(6, 460, 0, ' Biển nào chỉ dẫn địa giới hành chính giữa các thành phố, tỉnh, huyện?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 2, '460'),
(6, 461, 0, ' Biển nào báo hiệu “ Cầu vượt liên thông”?', '1 – Biển 2 và 3.', '2 – Biển 1 và 2.', '3 – Biển 1 và 3.', '4 – Cả ba biển.', 3, '461'),
(6, 462, 0, ' Biển số 1 có ý nghĩa gì?', '1 – Đi thẳn hoặc rẽ trái trên cầu vượt.', '2 – Đi thẳng hoặc rẽ phải trên cầu vượt.', '3 – Báo hiệu cầu vượt liên thông.', '', 3, '462'),
(6, 463, 0, ' Biển nào báo hiệu “ Tuyến đường cầu vượt cắt ngang qua”?', '1 – Biển 1 và 2.', '2 – Biển 1 và 3.', '3 – Biển 2 và 3.', '', 1, '463'),
(6, 464, 0, '  Biển báo dưới đây có ý nghĩa gì?', '1 – Chỉ dẫn khoảng cách đến làn đường cứu nạn ( làn thoát xe khẩn cấp).', '2 – Báo hiệu đường cụt phía trước.', '3 – Báo hiệu nút giao gần nhất phía trước.', '4 – Báo hiệu trạm dừng nghỉ phía trước.', 1, '464'),
(6, 465, 0, ' Tại đoạn đường có biển “ Làn đường dành riêng cho từng loại xe”, các phương tiện có được phép chuyển sang làn khác để đi theo hành trình mong muốn khi đến gần nơi đường bộ giao nhau hay không?', '1 – Được phép chuyển sang làn khác.', '2 – Không được phép chuyển sang làn khác, chỉ được đi trong làn quy định theo biển.', '', '', 1, '465'),
(6, 466, 0, ' Tại đoạn đường có cắm biển dưới đây, xe tải và xe khách có được phép đi vào không?', '1 – Có.', '2 – Không.', '', '', 1, '466'),
(6, 467, 0, ' Tại đoạn đường có cắm biển dưới đây, xe tải và xe khách có được phép đi vào không?', '1 – Có.', '2 – Không.', '', '', 2, '467'),
(6, 468, 0, '  Biển nào báo hiệu kết thúc đường cao tốc?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 2, '468'),
(6, 469, 0, ' Biển này có ý nghĩa gì?', '1 – Chỉ dẫn sắp đến vị trí nhập làn xe.', '2 – Chỉ dẫn vị trí nhập làn xe cách 250m.', '3 – Chỉ dẫn vị trí nhập làn cách trạm thu phí 250m.', '', 2, '469'),
(6, 470, 0, ' Biển này có ý nghĩa gì?', '1 – Bắt đầu đường cao tốc.', '2 – Chỉ dẫn địa giới đường cao tốc, chiều dài đường cao tốc.', '3 – Tên và ký hiệu đường cao tốc, tốc độ tối đa và tối thiểu khi di chuyển trên cao tốc.', '4 – Cả ý 1 và ý 3.', 4, '470'),
(6, 471, 0, ' Ý nghĩa các biểu tượng trên biển chỉ dẫn là gì?', '1 – Xăng dầu, ăn uống, thông tin, sửa chữa xe.', '2 – Xăng dầu, ăn uống, nhà nghỉ, sửa chữa xe.', '3 –Xăng dầu, ưn uống, cấp cứu, sửa chữa xe.', '', 1, '471'),
(6, 472, 0, ' Biển này có ý nghĩa gì?', '1 – Chỉ dẫn đến trạm kiểm tra tải trọng xe.', '2 – Chỉ dẫn hướng rẽ vào nơi đặt trạm kiểm tra tải trọng xe.', '3 – Chỉ dẫn khoảng cách đến trạm kiểm tra tải trọng xe cách 750m.', '', 3, '472'),
(6, 473, 0, ' Khi di chuyển trên đường cao tốc, gặp biển nào thì người lái xe đi theo hướng bên trái để tránh chướng ngại vật?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 1, '473'),
(6, 474, 0, '  Khi di chuyển trên đường cao tốc, gặp biển nào thì người lái xe đi theo hướng bên phải để tránh chướng ngại vật?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 3, '474'),
(6, 475, 0, ' Khi di chuyển trên đường cao tốc, gặp biển nào thì người lái xe đi được cả hai hướng ( bên trái hoặc bên phải)  để tránh chướng ngại vật?', '1 – Biển 1.', '2 – Biển 2.', '3 – Biển 3.', '', 2, '475'),
(6, 476, 0, ' Khi di chuyển trên đường cao tốc, gặp biển nào thì người lái xe phải chú ý đổi hướng đi khi sắp vào đường cong nguy hiểm?', '1 – Biển 1 và 2.', '2 – Biển 1 và 3.', '3 – Biển 2.', '4 – Biển 3.', 2, '476');
INSERT INTO `600_cau_hoi` (`chuong`, `cau`, `cau_diem_liet`, `cauhoi`, `dapan1`, `dapan2`, `dapan3`, `dapan4`, `dapandung`, `img`) VALUES
(6, 477, 0, ' Vạch mũi tên chỉ hướng trên mặt đường nào dưới đây cho phép xe chỉ được đi thẳng và rẽ phải?', '1 – Vạch 1.', '2 – Vạch 2 và 3.', '3 –  Vạch 3.', '4 – Vạch 1 và 2.', 3, '477'),
(6, 478, 0, ' Vạch kẻ đường nào dưới đây là vạch phân chia các làn xe cùng chiều?', '1 – Vạch 1.', '2 – Vạch 2.', '3 –  Vạch 3.', '4 – Vạch 1 và 2.', 4, '478'),
(6, 479, 0, ' Vạch kẻ đường nào dưới đây là vạch phân chia hai chiều xe chạy ( vạch tim đường), xe không được lấn làn, không được đè lên vạch?', '1 – Vạch 1.', '2 – Vạch 2.', '3 –  Vạch 3.', '4 – Cả 3 vạch.', 2, '479'),
(6, 480, 0, ' Vạch kẻ đường nào dưới đây là vạch phân chia hai chiều xe chạy ( vạch tim đường)?', '1 – Vạch 1.', '2 – Vạch 2.', '3 –  Vạch 3.', '4 – Vạch 1 và 3.', 4, '480'),
(6, 481, 0, ' Các vạch dưới đây có tác dụng gì?', '1 – Phân chia hai chiều xe chạy ngược nhiều nhau.', '2 – Phân chia các làn xe chạy cùng chiều nhau.', '', '', 1, '481'),
(6, 482, 0, ' Các vạch dưới đây có tác dụng gì?', '1 – Phân chia hai chiều xe chạy ngược nhiều nhau.', '2 – Phân chia các làn xe chạy cùng chiều nhau.', '', '', 2, '482'),
(6, 483, 0, ' Khi gặp vạch kẻ đường nào các xe được phép đè vạch?', '600 Câu Hỏi Lý Thuyết &amp; Đáp Án Thi Sát Hạch Lái Xe Ôtô Mới Nhất 5291 – Vạch 1.', '2 – Vạch 2.', '3 –  Vạch 3.', '4 – Vạch 1 và vạch 3.', 4, '483'),
(6, 484, 0, ' Vạch dưới đây có tác dụng gì?', '1 – Để xác định làn đường.', '2 – Báo hiệu người lái xe chỉ được phép đi thẳng.', '3 – Dùng để xác định khoảng cách giữa các phương tiện trên đường.', '4 – Để trang trí.', 3, '484'),
(6, 485, 0, ' Vạch dưới đây có ý nghĩa gì?', '1 – Báo cho người điều khiển không được dừng phương tiện trong phạm vi phần mặt đường có bố trí vạch để tránh ùn tắc giao thông.', '2 – Báo hiệu sắp đến chỗ có bố trí vạch đi bộ qua đường.', '3 – Dùng để xác định khoảng cách giữa các phương tiện trên đường.', '', 2, '485'),
(6, 486, 0, ' Vạch dưới đây có ý nghĩa gì?', '1 – Vị trí dừng xe của các phương tiện vận tải hành khách công cộng.', '2 – Báo cho người điều khiển được dừng phương tiện trong phạm vi phần mặt đường có bố trí vạch để tránh ùn tắc giao thông.', '3 – Dùng để xác định vị trí giữa các phương tiện trên đường.', '', 1, '486'),
(7, 487, 0, ' Thứ tự đi như thế nào là đúng quy tắc giao thông?', '1 – Xe tải, xe khách, xe con, mô tô.', '2 – Xe tải, mô tô, xe khách, xe con.', '3 – Xe khách, xe tải, xe con, mô tô.', '', 2, '487'),
(7, 488, 0, ' Thứ tự đi như thế nào là đúng quy tắc giao thông?', '1 – Xe công an, xe con, xe tải, xe khách.', '2 – Xe công an, xe khách, xe con, xe tải.', '3 – Xe công an, xe tải, xe khách, xe con.', '4 – Xe con, xe công an, xe tải, xe khách.', 1, '488'),
(7, 489, 0, ' Theo hướng mũi tên, thứ tự các xe đi như thế nào là đúng quy tắc giao thông?', '1 – Xe tải, xe công an, xe khách, xe con.', '2 – Xe công an, xe khách, xe con, xe tải.', '3 – Xe công an, xe con, xe tải, xe khách.', '4 – Xe công an, xe tải, xe khách, xe con.', 4, '489'),
(7, 490, 0, ' Thứ tự các xe đi như thế nào là đúng quy tắc giao thông?', '1 – Xe tải, xe con, mô tô.', '2 – Xe con, xe tải, mô tô.', '3 –  Mô tô, xe con, xe tải.', '4 – Xe con, mô tô, xe tải.', 3, '490'),
(7, 491, 0, ' Xe nào phải nhường đường trong trường hợp này?', '1 – Xe con.', '2 – Xe tải.', '', '', 1, '491'),
(7, 492, 0, ' Trường hợp này xe nào được quyền đi trước?', '1 – Xe mô tô.', '2 – Xe con.', '', '', 2, '492'),
(7, 493, 0, ' Thứ tự các xe đi như thế nào là đúng quy tắc giao thông?', '1 – Xe con (A), xe cứu thương, xe con (B).', '2 – Xe cứu thương, xe con (B), xe con (A).', '3 – Xe con (B), xe con (A), xe cứu thương.', '', 1, '493'),
(7, 494, 0, ' Thứ tự các xe như thế nào là đúng quy tắc giao thông?', '1 – Xe cứu thương, xe cứu hỏa, xe con.', '2 – Xe cứu hỏa, xe cứu thương, xe con.', '3 – Xe cứu thương, xe con, xe cứu hỏa.', '', 2, '494'),
(7, 495, 0, ' Xe nào được quyền ưu tiên đi trước trong trường hợp này?', ' 1 – Xe mô tô.', '2 – Xe cứu thương.', '', '', 2, '495'),
(7, 496, 0, ' Xe nào phải nhường đường đi cuối cùng qua nơi giao nhau này?', '1 – Xe khách.', '2 – Xe tải.', '3 – Xe con.', '', 1, '496'),
(7, 497, 0, ' Xe nào phải nhường đường là đúng quy tắc gaio thông?', '1 – Xe con.', '2 – Xe tải.', '', '', 1, '497'),
(7, 498, 0, ' Xe nào được quyền đi trước trong trường hợp này?', '1 – Xe công an.', '2 – Xe chữa cháy.', '', '', 2, '498'),
(7, 499, 0, ' Theo tín hiệu đèn, xe nào được phép đi?', '1 – Xe con và xe khách.', '2 – Mô tô.', '', '', 1, '499'),
(7, 500, 0, ' Theo tín hiệu đèn, xe nào được quyền đi là đúng quy tắc giao thông?', '1 – Xe khách, mô tô.', '2 – Xe con, xe tải.', '3 – Xe tải, mô tô.', '', 2, '500'),
(7, 501, 0, ' Trong trường hợp này xe nào được quyền đi trước?', '1 – Xe công an.', '2 – Xe quân sự.', '', '', 2, '501'),
(7, 502, 0, ' Theo tín hiệu đèn, xe tải đi theo hướng nào là đúng quy tắc giao thông?', '1 – Hướng 2, 3, 4.', '2 – Chỉ hướng 1.', '3 – Hướng 1 và 2.', '4 – Hướng 3 và 4.', 2, '502'),
(7, 503, 0, ' Các xe đi theo hướng mũi tên, xe nào vi phạm quy tắc giao thông?', '1 – Xe khách, xe tải, mô tô.', '2 – Xe tải, xe con, mô tô.', '3 – Xe khách, xe con, mô tô.', '', 1, '503'),
(7, 504, 0, ' Thứ tự các xe đi nhưu thế nào là đúng quy tắc giao thông?', '1 – Xe khách, xe tải, mô tô, xe con.', '2 – Xe con, xe khách, xe tải, mô tô.', '3 – Mô tô, xe tải, xe khách, xe con.', '4 – Mô tô, xe tải, xe con, xe khách.', 3, '504'),
(7, 505, 0, ' Trong trường hợp này xe nào đỗ vi phạm quy tắc giao thông?', '1 – Xe tải.', '2 – Xe con và mô tô.', '3 – Cả ba xe.', '4 – xe con và xe tải.', 1, '505'),
(7, 506, 0, ' Xe nào được quyền đi trước?', '1 – Xe tải.', '2 – Xe con (B).', '3 – Xe con (A).', '', 2, '506'),
(7, 507, 0, ' Theo hướng mũi tên, những hướng nào xe gắn máy đi được?', '1 – Cả ba hướng.', '2 – Chỉ hướng 1 và 3.', '3 – Chỉ hướng 1.', '', 1, '507'),
(7, 508, 0, ' Xe nào đỗ vi phạm quy tắc giao thông?', '1 – Cả hai xe.', '2 – Không xe nào vi phạm.', '3 – Chỉ xe mô tô vi phạm.', '4 – Chỉ xe tải vi phạm.', 1, '508'),
(7, 509, 0, ' Xe nào đỗ vi phạm quy tắc giao thông?', '1 – Chỉ mô tô.', '2 – Chỉ xe tải.', '.', '4 – Chỉ mô tô và xe tải.', 3, '509'),
(7, 510, 0, ' Xe tải kéo mô tô ba bánh như hình này có đúng quy tắc giao thông?', '1 – Đúng.', '2 – Không đúng.', '', '', 2, '510'),
(7, 511, 0, ' Theo hướng mũi tên, hướng nào xe không được phép đi?', '1 – Hướng 2 và 5.', '2 – Chỉ hướng 1.', '', '', 2, '511'),
(7, 512, 0, ' Theo hướng mũi tên, những hướng nào ô tô không được phép đi?', '1 – Hướng 1 và 2.', '2 – Hướng 3.', '3 – Hướng 1 và 4.', '4 – Hướng 2 và 3.', 2, '512'),
(7, 513, 0, ' Xe nào vượt đúng quy tắc giao thông?', '1 – Cả 2 xe đều đúng.', '2 – Xe con.', '3 – Xe khách.', '', 1, '513'),
(7, 514, 0, ' Theo hướng mũi tên, gặp biển hướng đi phải theo đặt trước ngã tư, những hướng nào xe được phép đi?', '1 – Hướng 2 và 3.', '2 – Hướng 1, 2 và 3.', '3 – Hướng 1 và 3.', '', 1, '514'),
(7, 515, 0, ' Xe kéo nhau như hình này có vi phạm quy tắc giao thông không?', '1 – Không.', '2 – Vi phạm.', '', '', 2, '515'),
(7, 516, 0, ' Xe nào phải nhường đường trong trường hợp này?', '1 – Xe khách.', '2 – Xe tải.', '', '', 1, '516'),
(7, 517, 0, ' Xe nào được quyền đi trước trong trường hợp này?', '1 – Xe con.', '2 – Xe mô tô.', '', '', 2, '517'),
(7, 518, 0, ' Xe kéo nhau trong trường hợp này đúng quy định không?', '1 – Không đúng.', '2 – Đúng.', '', '', 1, '518'),
(7, 519, 0, ' Theo hướng mũi tên, những hướng đi nào ô tô con được phép đi?', '1 – Hướng 1.', '2 – Hướng 1, 3 và 4.', '3 – Hướng 2, 3 và 4.', '4 – Cả bốn hướng.', 2, '519'),
(7, 520, 0, ' Thứ tự các xe đu như thế nào là đúng quy tắc giao thông?', '1 – Xe con (A), mô tô, xe con (B), xe đạp.', '2 – Xe con (B), xe đạp, mô tô, xe con (A).', '3 – Xe con (A), xe con (B).', ' mô tô + xe đạp.', 4, '520'),
(7, 521, 0, ' Theo hướng mũi tên, những hướng nào xe tải được phép đi?', '1 – Chỉ hướng 1.', '2 – Hướng 1,3 và 4.', '3 – Hướng 1, 2 và 3.', '4 – Cả bốn hướng.', 1, '521'),
(7, 522, 0, ' Những hướng nào xe tải được phép đi?', '1 – Cả ba hướng.', '', 'âu 522/ Những hướng nào xe tải được phép đi?1 – Cả ba hướng.', '', 2, '522'),
(7, 523, 0, ' Những hướng nào ô tô tải được phép đi?', '1 – Chỉ hướng 1.', '2 – Hướng 1 và 4.', '3 – Hướng 1 và 5.', '4 – Hướng 1, 4 và 5.', 3, '523'),
(7, 524, 0, '  Những hướng nào ô tô tải được phép đi?', '1 – Cả bốn hướng.', '2 – Trừ hướng 2.', '3 – Hướng 2, 3 và 4.', '4 – Trừ hướng 4.', 2, '524'),
(7, 525, 0, ' Xe nào được quyền đi trước trong trường hợp này?', '1 – Xe mô tô.', '2 – Xe con.', '', '', 1, '525'),
(7, 526, 0, ' Ô tô con đi theo chiều mũi tên có vi phạm quy tắc giao thông không?', '1 – Không vi phạm.', '2 – Vi phạm.', '', '', 2, '526'),
(7, 527, 0, ' Xe nào vi phạm quy tắc giao thông?', '1 – Xe khách.', '2 – Mô tô.', '3 – Xe con.', '4 – Xe con và mô tô.', 3, '527'),
(7, 528, 0, ' Các xe đi như thế nào là đúng quy tắc giao thông?', '1 – Các xe phía tay phải và tay trái của người điều khiển được phép đi thẳng.', '2 – Cho phép các xe ở mọi hướng được rẽ phải.', '3 – Tất cả các xe phải dừng lại trước ngã tư, trừ những xe đã ở trong ngã tư được phép tiếp tục đi.', '', 3, '528'),
(7, 529, 0, ' Theo hướng mũi tên, xe nào được phép đi?', '1 – Mô tô, xe con.', '2 – Xe con, xe tải.', '3 – Mô tô, xe tải.', '4 – Cả ba xe.', 3, '529'),
(7, 530, 0, ' Xe con vượt xe tải như trường hợp này có đúng không?', '1 – Đúng.', '2 – Không đúng.', '', '', 1, '530'),
(7, 531, 0, ' Xe nào vượt đúng quy tăc giao thông?', '1 – Xe tải.', '2 – Cả hai xe.', '3 – Xe con.', '', 3, '531'),
(7, 532, 0, ' Đi theo hướng mũi tên xe nào vi phạm quy tắc giao thông?', '1 – Xe chữa cháy.', '2 – Xe tải.', '3 – Cả hai xe.', '', 2, '532'),
(7, 533, 0, ' Thứ tự các xe đi như thế nào là đúng quy tắc gaio thông?', '1 – Xe khách, xe tải, xe con.', '2 – Xe con, xe tải, xe khách.', '3 – Xe tải, xe khách, xe con.', '', 3, '533'),
(7, 534, 0, ' Thứ tự các xe đi nhưu thế nào là đúng quy tắc giao thông?', '1 – Xe khách và xe tải, xe con.', '2 – Xe tải, xe khách, xe con.', '3 – xe con, xe khách, xe tải.', '', 1, '534'),
(7, 535, 0, ' Những hướng nào ô tô tải được phép đi?', '1 – Cả bốn hướng.', '2 – Chỉ hướng 1 và 2.', '3 – Trừ hướng 4.', '', 3, '535'),
(7, 536, 0, ' Theo hướng mũi tên thứ tự các xe đi như thế nào là đúng?', '1 – Xe công an, xe con, xe tải, xe khách.', '2 – Xe con, xe khách và xe công an, xe tải.', '3 – Xe công an, xe con, xe khách, xe tải.', '4 – Xe con, xe tải, xe khách, xe công an.', 1, '536'),
(7, 537, 0, ' Những hướng nào ô tô tải được phép đi?', '1 – Cả bốn hướng.', '2 – Hướng 1, 2 và 3.', '3 – Hướng 1 và 4.', '4 – Hướng 1, 3 và 4.', 4, '537'),
(7, 538, 0, ' Trong hình dưới đây, xe nào chấp hành đúng quy tắc giao thông?', '1 – Chỉ xe khách, mô tô.', '2 – Tất cả các loại xe trên.', '3 – Không xe nào châp hành đúng quy tắc giao thông.', '', 2, '538'),
(7, 539, 0, ' Theo hướng mũi tên, những hướng nào xe mô tô được phép đi?', '1 – Cả ba hướng.', '2 – Hướng 1 và 2.', '3 – Hướng 1 và 3.', '4 – Hướng 2 và 3.', 3, '539'),
(7, 540, 0, ' Trong trường hợp này, thứ tự các xe đi như thế nào là đúng quy tắc giao thông?', '1 – Xe công an, xe quân sự, xe con + xe mô tô.', '2 – Xe quân sự, xe công an, xe con + mô tô.', '3 – Xe mô tô + xe con, xe quân sự, xe công an.', '', 2, '540'),
(7, 541, 0, ' Xe nào phải nhường đường là đúng quy tắc giao thông?', '1 – Xe A.', '2 – Xe B.', '', '', 1, '541'),
(7, 542, 0, ' Xe con quay đầu đi ngược lại như hình vẽ dưới có vi phạm quy tắc giao thông không?', '1 – Không vi phạm.', '2 – Vi phạm.', '', '', 2, '542'),
(7, 543, 0, ' Trong hình dưới, những xe nào vi phạm quy tắc giao thông?', '1 – Xe con ( E ), mô tô ( C ).', '2 –  Xe tải ( A ), mô tô ( D ).', '3 – Xe khách ( B ), mô tô ( C ).', '4 – Xe khách  ( B ), mô tô ( D ).', 1, '543'),
(7, 544, 0, ' Điều khiển cho xe đi thẳng, người lái xe phải làm gì là đúng quy tắc giao thông?', '1 – Nhường xe con rẽ trái trước.', '2 – Đi thẳng không nhường.', '', '', 1, '544'),
(7, 545, 0, ' Người lái điều khiển xe chạy theo hướng nào là đúng quy tắc giao thông?', '1 – Chỉ hướng 2.', '2 – Hướng 1 và 2.', '3 – Tất cả các hướng trừ hướng 3.', '4 – Tất cả các hướng trừ hướng 4.', 2, '545'),
(7, 546, 0, '  Xe nào phải nhường đường là đúng quy tắc giao thông?', '1 – Xe con (A).', '2 – Xe con (B).', '', '', 2, '546'),
(7, 547, 0, ' Người lái xe điều khiển xe rẽ trái như thế nào là đúng quy tắc giao thông?', '1 – Rẽ trái ngay trước xe buýt.', '2 – Rẽ trái trước xe tải.', '3 – Nhường đường cho xe buýt và xe tải.', '', 3, '547'),
(7, 548, 0, ' Trong hình dưới những xe nào vi phạm quy tắc giao thông?', '1 – Xe con (B), mô tô (C).', '2 – Xe con (A), mô tô (C).', '3 – Xe con (E), mô tô (D).', '4 – Tất cả các loại xe trên.', 3, '548'),
(7, 549, 0, ' Xe nào đi trước là đúng quy tắc giao thông?', '1 – Xe của bạn.', '2 – Xe tải.', '', '', 2, '549'),
(7, 550, 0, ' Người lái xe có thể quay đầu xe như thế nào là đúng quy tắc giao thông?', '1 – Quay đầu theo hướng A.', '2 – Quay đầu theo hướng B.', '3 – Cấm quay đầu.', '', 1, '550'),
(7, 551, 0, ' Thứ tự các xe đi như thế nào là đúng quy tắc giao thông?', '1 – Xe con và xe tải, xe của bạn.', '2 – Xe của bạn, xe tải và xe con.', '3 – Xe của bạn và xe con, xe tải.', '4 – Xe của bạn, xe tải + xe con.', 3, '551'),
(7, 552, 0, ' Khi muốn vượt xe tải, người lái xe làm gì là đúng quy tắc giao thông?', '1 – Tăng tốc cho xe chạy vượt qua.', '2 – Bật tín hiệu báo hiệu bằng đèn hoặc còi, khi đủ điều kiện an toàn, tăng tốc cho xe chạy vượt qua.', '3 – Đánh lái sang làn bên trái và tăng tốc cho xe chạy vượt qua.', '', 2, '552'),
(7, 553, 0, ' Theo tín hiệu đèn, xe nào phải dừng lại là đúng quy tắc giao thông?', '1 – Xe khách, mô tô.', '2 – Xe tải, mô tô.', '3 – Xe con, xe tải.', '', 3, '553'),
(7, 554, 0, ' Xe nào phải nhường đường là đúng quy tắc giao thông?', '1 – Xe tải.', '2 – Xe khách.', '3 – Xe con.', '', 2, '554'),
(7, 555, 0, ' Người lái xe được phép vượt xe tải để đi thẳng trong trường hợp này không?', '1 – Được vượt.', '2 – Cấm vượt.', '', '', 2, '555'),
(7, 556, 0, ' Bạn có được phép vượt xe mô tô phía trước không?', '1 – Cho phép.', '2 – Không được vượt.', '', '', 2, '556'),
(7, 557, 0, ' Người láu xe dừng tại vị trí nào là đúng quy tắc giao thông?', '1 – Vị trí A và B.', '2 – Vị trí A và C.', '3 – Vị trí B và C.', '4 – Cả ba vị trí A, B và C.', 3, '557'),
(7, 558, 0, ' Bạn được dừng ở vị trí nào trong tình huống này?', '1 – Được phép dừng ở vị trí A.', '2 – Được phép dừng ở vị trí B.', '3 – Được phép dừng ở vị trí A và B.', '4 – Không được dừng.', 4, '558'),
(7, 559, 0, ' Theo tín hiệu đèn của xe cơ giới, xe nào vi phạm quy tắc giao thông?', '1 – Xe mô tô.', '2 – Xe ô tô con.', '3 – Không xe nào vi phạm.', '4  – Cả hai xe.', 4, '559'),
(7, 560, 0, ' Các xe đi theo hướng mũi tên, xe nào vi phạm quy tắc giao thông?', '1 –  Xe con.', '2 – Xe tải.', '3 – Xe con và xe tải.', '', 2, '560'),
(7, 561, 0, ' Các xe đi theo hướng mũi tên, xe nào vi phạm quy tắc giao thông?', '1 – Xe tải, xe con.', '2 – Xe khách, xe con.', '3 – Xe khách, xe tải.', '', 3, '561'),
(7, 562, 0, ' Các xe đi theo hướng mũi tên xe nào vi phạm quy tắc giao thông?', '1 – Xe con, xe tải, xe khách.', '2 – Xe tải, xe khách, xe mô tô.', '3 – Xe khách, xe mô tô, xe con.', '4 – Cả bốn xe.', 2, '562'),
(7, 563, 0, ' Các xe đi theo hướng mũi tên, xe nào vi phạm quy tắc giao thông?', '1 – Xe khách, xe tải.', '2 – Xe khách, xe con.', '3 – Xe con, xe tải.', '4 – Xe khách, xe tải, xe con.', 1, '563'),
(7, 564, 0, ' Trong tình huống dưới đây, để tránh xe phía trước bị hỏng đột xuất trên đường, người lái xe phải làm thế nào?', '1 – Đánh lái sang trái cho xe vượt qua.', '2 – Quan sát phía trước, phía sau, khi đủ điều kiện an toàn, bật tín hiệu bằng đèn hoặc còi rồi cho xe chạy vượt qua.', '3 – Cấm vượt.', '', 2, '564'),
(7, 565, 0, ' Các xe đi theo hướng mũi tên, xe nào chấp hành đúng quy tắc giao thông?', '1 – Xe tải, mô tô.', '2 – Xe khách, mô tô.', '3 – Xe tải, xe con.', '4 – Mô tô, xe con.', 2, '565'),
(7, 566, 0, ' Trong hình dưới, những xe nào vi phạm quy tắc giao thông?', '1 – Xe con (A), xe con (B), xe tải (D).', '2 – Xe tải (D), xe con (E), xe buýt (G).', '3 – Xe tải ( D), xe con (B).', '4 – Xe con (B), xe con (C).', 3, '566'),
(7, 567, 0, ' Các xe đi theo thứ tự nào là đúng quy tắc giao thông đường bộ?', '1 – Xe của bạn, mô tô , xe con.', '2 – Xe con, xe của bạn, mô tô.', '3 – Mô tô, xe con, xe của bạn.', '', 3, '567'),
(7, 568, 0, ' Các xe đi theo thứ nào là đúng quy tắc giao thông đường bộ?', '1 – Xe của bạn, mô tô, xe con.', '2 – Xe con, xe của bạn, mô tô.', '3 – Mô tô, xe con, xe của bạn.', '', 2, '568'),
(7, 569, 0, ' Xe nào phải dừng lại trong trường hợp này?', '1 –  Xe con.', '2 – Xe của bạn.', '3 – Cả hai xe.', '', 1, '569'),
(7, 570, 0, ' Xe của bạn được đi theo hướng nào trong trường hợp này?', '1 – Đi thẳng hoặc rẽ trái.', '2 – Đi thẳng hoặc rẽ phải.', '3 – Rẽ trái.', '4 – Đi thẳng, rẽ phải hoặc rẽ trái.', 1, '570'),
(7, 571, 0, ' Xe của bạn được đi theo hướng nào trong trường hợp này?', '1 – Chuyển sang làn đường bên phải và rẽ phải.', '2 – Dừng lại trước vạch dừng và rẽ phải khi đèn xanh.', '3 – Dừng lại trước vạch dừng và đi thẳng hoặc rẽ trái khi đèn xanh.', '', 3, '571'),
(7, 572, 0, ' Bạn xử lý như thế nào trong trường hợp này?', '1 – Tăng tốc độ, rẽ phải trước xe tải và xe đạp.', '2 – Giảm tốc độ, rẽ phải sau xe tải và xe đạp.', '3 – Tăng tốc độ, rẽ phải trước xe đạp.', '', 2, '572'),
(7, 573, 0, ' Bạn xử lý như thế nào trong trường hợp này?', '1 – Tăng tốc độ, rẽ phải trước xe con màu xanh phía trước và người đi bộ.', '2 – Giảm tốc độ, để người đi bộ qua đường và rẽ phải trước xe con màu xanh.', '3 – Giảm tốc độ, để người đi bộ qua đường và rẽ phải sau xe con màu xanh.', '', 3, '573'),
(7, 574, 0, ' Bạn xử lý như thế nào trong trường hợp này?', '1 – Nhường đường cho xe khách và đi trước xe đạp.', '2 – Nhường đường cho xe đạp và đi trước xe khách.', '3 – Nhường đường cho xe đạp và xe khách.', '', 3, '574'),
(7, 575, 0, ' Xe nào phải nhường đường trong trường hợp này?', '1 – Xe con.', '2 – Xe tải.', '3 – Xe của bạn.', '', 2, '575'),
(7, 576, 0, ' Xe nào phải nhường đường trong trường hợp này?', '1 – Xe đi ngược chiểu.', '2 – Xe của bạn.', '', '', 2, '576'),
(7, 577, 0, ' Bạn xử lý như thế nào khi lái xe ô tô vượt qua đoàn người đi xe đạp có tổ chức?', '1 – Tăng tốc độ, chuyển sang làn đường bên trái để vượt.', '2 – Không được vượt những người đi xe đạp.', '', '', 2, '577'),
(7, 578, 0, ' Phía trước có một xe đang lùi vào nơi đỗ, xe con phía trước đang chuyển sang làn đường bên trái, bạn xử lý như thế nào trong trường hợp này?', '1 – Nếu phía sau không có xe xin vượt, chuyển sang làn đường bên trái.', '2 – Nếu phía sau có xe xin vượt, thì giảm tốc độ, ở lại làn đường, dừng lại khi cần thiết.', '3 – Tăng tốc độ trên làn đường của mình và vượt xe con.', '4 – Ý 1 và 2.', 4, '578'),
(7, 579, 0, ' Bạn xử lý như thế nào khi xe phía trước đang lùi ra khỏi nới đó?', '1 – Chuyển sang nửa đường bên trái để đi tiếp.', '2 – Bấm còi, nháy đèn báo hiệu và đi tiếp.', '3 – Giảm tốc độ, dừng lại nhường đường.', '', 3, '579'),
(7, 580, 0, ' Phía trước có một xe màu xanh đang vượt xe màu vàng trên làn đường của bạn, bạn xử lý như thế nào trong trường hợp này?', '1 – Phanh xe giảm tốc độ và đi sát lề đường bên phải.', '2 – Bấm còi, nháy đèn báo hiệu, giữ nguyên tốc độ và đi tiếp.', '3 – Phanh xe giảm tốc độ và đi sát vào lề đường bên trái.', '', 1, '580'),
(7, 581, 0, ' Xe tải phía trước có tín hiệu xin chuyển làn đường, bạn xử lý như thế nào trong trường hợp này?', '1 – Bật tín hiệu xin chuyển làn đường sang trái để vượt xe tải.', '2 – Phanh xe, giảm tốc độ chờ xe tải phía trước chuyển làn đường.', '', '', 2, '581'),
(7, 582, 0, ' Bạn xử lý như thế nào trong trường hợp này?', '1 – Tăng tốc độ và đi thẳng qua ngã tư.', '2 – Dừng xe trước vạch dừng.', '3 – Giảm tốc độ và đi thẳng qua ngã tư.', '', 3, '582'),
(7, 583, 0, ' Các xe đi như thế nào là đúng quy tắc giao thông?', '1 – Xe của bạn, mô tô, xe đạp.', '2 – Xe mô tô, xe đạp, xe của bạn.', '3 – Xe đạp, xe mô tô, xe của bạn.', '', 3, '583'),
(7, 584, 0, ' Các xe đi như thế nào là đúng quy tắc giao thông đường bộ?', '1 – Xe của bạn, xe tải, xe con.', '2 – Xe con, xe tải, xe của bạn.', '3 – Xe tải, xe của bạn, xe con.', '4 – Xe của bạn, xe con, xe tải.', 4, '584'),
(7, 585, 0, ' Xe nào phải nhường đường trong trường hợp này?', '1 – Xe của bạn.', '2 – Xe con.', '', '', 1, '585'),
(7, 586, 0, ' Xe nào phải nhường đường trong trường hợp này?', '1 – Xe con.', '2 – Xe của bạn.', '', '', 2, '586'),
(7, 587, 0, ' Bạn xử lý thế nào trong trường hợp này?', '1 – Tăng tốc độ, đi qua vạch người đi bộ sang đường, để người đi bộ sang đường sau.', '2 – Giảm tốc độ, đi qua vạch người đi bộ sang đường, để người đi bộ sang đường sau.', '3 – Giảm tốc độ , để người đi bộ sang đường trước, sau đó cho xe đi qua vạch người đi bộ sang đường.', '', 3, '587'),
(7, 588, 0, ' Xe nào được đi trước trong trường hợp này?', '1 – Xe con.', '2 – Xe của bạn.', '', '', 2, '588'),
(7, 589, 0, ' Các xe đi theo thứ tự như thế nào là đúng quy tắc giao thông đường bộ?', '1 – Xe con, xe tải, xe của bạn.', '2 – Xe tải, xe con, xe của bạn.', '3 – Xe tải, xe của bạn, xe con.', '', 2, '589'),
(7, 590, 0, ' Bạn xử lý như thế nào trong trường hợp này?', '1 – Tăng tốc độ cho xe lấn sang phần đường bên trái.', '2 – Giảm tốc độ cho xe lấn sang phần đường bên trái.', '3 – Giảm tốc độ cho xe đi sát phần đường bên phải.', '', 3, '590'),
(7, 591, 0, ' Xe nào được đi trước trong trường hợp này?', '1 – Xe tải.', '2 – Xe của bạn.', '', '', 1, '591'),
(7, 592, 0, ' Xe nào dừng đúng theo quy tắc giao thông?', '1 – Xe con.', '2 – Xe mô tô.', '3 – Cả 2 xe đều sái.', '', 1, '592'),
(7, 593, 0, ' Các xe đi theo thứ tự như thế nào là đúng quy tắc giao thông đường bộ?', '1 – Xe tải, xe đạp, xe của bạn.', '2 – Xe của bạn, xe đạp, xe tải.', '3 – Xe của bạn, xe tải, xe đạp.', '', 3, '593'),
(7, 594, 0, ' Để điều khiển xe rẽ trái, bạn chọn hướng đi nào dưới đây?', '1 – Hướng 1.', '2 – Hướng 2.', '3 – Cả hai hướng đều được.', '', 1, '594'),
(7, 595, 0, ' Khi gặp xe ngược chiều bật đèn pha trong tình huống dưới dây, bạn xử lý như thế nào?', '1 – Bật đèn chiếu xa, tăng tốc độ vượt xe cùng chiều.', '2 – Giữ nguyên đền chiếu gần, giảm tốc độ, đi sau xe phía trước.', '3 – Giữ nguyên đèn chiếu gần, tăng tốc độ vượt xe cùng chiều.', '', 2, '595'),
(7, 596, 0, ' Xe của bạn dang di chuyển gần đến khu vực giao cắt với đường sắt, khi rào chắn đang dịch chuyển, bạn điều khiển xe như thế nào là đúng quy tắc giao thông?', '1 – Quan sát nếu thấy không có tàu thì tăng tốc, cho xe vượt qua đường sắt.', '2 – Dừng lại trước rào chắn một khoảng cách an toàn.', '3 – Ra tín hiệu, yêu cầu người gác chắn tàu kéo chậm Barie để xe bạn qua.', '', 2, '596'),
(7, 597, 0, ' Trong tình huống dưới đây xe con màu đỏ nhập làn đường cao tốc theo hướng mũi tên là đúng hay sai?', '1 – Đúng.', '2 – Sai.', '', '', 2, '597'),
(7, 598, 0, ' Trong tình huống dưới đây, xe con màu đỏ có được phép vượt khi xe con màu xanh đang vượt xe tải hay không?', '1 – Được vượt.', '2 – Không được vượt.', '', '', 2, '598'),
(7, 599, 0, ' Trong tình huống dưới đay, xe con màu vàng vượt xe con màu đỏ là đúng quy tắc giao thông hay không?', '1 – Đúng.', '2 – Không Đúng.', '', '', 1, '599'),
(7, 600, 0, ' Trong tình huống dưới đây, xe đầu kéo rơ móoc (xe container) đang rẽ phải, xe con màu xanh đi như thế nào để đảm bảo an toàn?', '1 – Vượt về phía bên phải để đi tiếp.', '2 – Giảm tốc độ chờ xe đầu kéo rẽ phải, rồi tiếp tục đi.', '3 – Vượt về phía bên trái để đi tiếp.', '', 2, '600');

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`, `admin`, `email`) VALUES
('admin', 'admin', 1, ''),
('dung', '123', 0, ''),
('linh', '123', 0, ''),
('phu', '123', 0, 'phu444080@gmail.com'),
('phu1', '123', 0, ''),
('thinh', '123', 1, '123@123');

-- --------------------------------------------------------

--
-- Table structure for table `bodeonthiblx`
--

CREATE TABLE `bodeonthiblx` (
  `DeSo` int(11) NOT NULL,
  `cau` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `bodeonthiblx`
--

INSERT INTO `bodeonthiblx` (`DeSo`, `cau`) VALUES
(1, '1-7-48-53-72-79-124-129-202-254-276-317-367-371-376-378-408-429-465-481-494-506-515-533-548-580-586-587-597-258'),
(2, '12-25-32-33-39-40-147-151-194-235-282-307-358-380-389-410-420-439-440-478-488-517-530-557-575-581-584-586-591-40'),
(3, '2-4-9-57-61-99-150-156-210-265-285-344-368-372-383-397-398-416-471-481-490-493-518-519-521-529-550-572-589-18'),
(4, '4-7-32-47-52-119-143-157-203-268-278-309-313-318-329-354-420-426-442-483-488-504-519-546-563-567-583-595-598-101'),
(5, '14-56-77-95-96-112-117-129-211-256-286-319-321-329-345-356-387-398-422-484-498-504-507-513-532-572-573-575-585-143');

-- --------------------------------------------------------

--
-- Table structure for table `bo_de_thi_mo_phong`
--

CREATE TABLE `bo_de_thi_mo_phong` (
  `DeSo` int(11) NOT NULL,
  `cau` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `bo_de_thi_mo_phong`
--

INSERT INTO `bo_de_thi_mo_phong` (`DeSo`, `cau`) VALUES
(1, '13-29-43-57-63-73-74-76-97-119'),
(2, '28-29-35-46-62-68-76-90-93-110'),
(3, '17-23-37-47-53-66-77-84-101-107'),
(4, '14-25-34-51-56-65-77-90-95-103'),
(5, '7-22-36-46-47-71-81-88-92-94');

-- --------------------------------------------------------

--
-- Table structure for table `dstinh`
--

CREATE TABLE `dstinh` (
  `Tinh` text NOT NULL,
  `Noi_Thi` text NOT NULL,
  `Dia_Chi` text NOT NULL,
  `SDT` varchar(255) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `dstinh`
--

INSERT INTO `dstinh` (`Tinh`, `Noi_Thi`, `Dia_Chi`, `SDT`, `img`) VALUES
('Hà Nội', 'Trung tâm sát hạch để cấp giấy phép lái xe Thành phố Hà Nội', 'Đồng Chầm, Tiên Dược, Sóc Sơn, Hà Nội', ' 02435932055', ''),
('Gia Lai', 'Trường Cao đẳng nghề Gia Lai', 'Đường Trần Nhật Duật, thôn 6, xã Diên Phú, Tp. Pleiku, tỉnh Gia Lai', ' 02693 825 001', ''),
('Hà Giang', 'Trung tâm giáo dục nghề nghiệp và sát hạch lái xe Bình Vàng', 'KCN Bình Vàng, Xã Đạo Đức, Huyện Vị Xuyên, Tỉnh Hà Giang', ' 0886 815 899', ''),
('Phú Thọ', 'Trung tâm Đào tạo và Sát hạch lái xe Phú Thọ', '2030 Đường Hùng Vương, Thi Đua, Thành phố Việt Trì, Phú Thọ', '(0210) 3857155', ''),
('Hồ Chí Minh', 'Trường Cao đẳng nghề GTVT TP.HCM', '08 Nguyễn Ảnh Thủ, P. Trung Mỹ Tây, Q. 12, TP.HCM', '(028) 3717 4875', ''),
('Tuyên Quang', 'Trung tâm sát hạch lái xe tỉnh Tuyên Quang', 'Số 12, đường Nguyễn Văn Linh, Phường Minh Khai, Thành phố Tuyên Quang, Tỉnh Tuyên Quang', '+84 207 3852 244', ''),
('Thái Nguyên', 'Trung tâm sát hạch lái xe tỉnh Thái Nguyên', 'Phân hiệu Đào tạo Việt Bắc, Trường Cao đẳng Than - Khoáng sản Việt Nam, xã Sơn Cẩm, Thành phố Thái Nguyên, Tỉnh Thái Nguyên', '+84 208 3818 333', ''),
('Cao Bằng', 'Sở Giao thông vận tải Cao Bằng', 'Số 123, đường Kim Đồng, phường Hợp Giang, TP Cao Bằng', '+84 209 3856 620', ''),
('Vĩnh Phúc', 'Trung tâm sát hạch lái xe tỉnh Vĩnh Phúc', 'Số 123, đường Trần Hưng Đạo, Phường Phúc Yên, Thành phố Phúc Yên, Tỉnh Vĩnh Phúc', '+84 211 3842 244', ''),
('Sơn La', 'Trung tâm Sát hạch Lái xe Cơ giới Đường bộ Trực thuộc Sở Giao thông Vận tải Sơn La', '7XM+7F2, QL6, P. Chiềng Cọ, Thành phố Sơn La, Sơn La', '+84 212 3874 350', ''),
('Hòa Bình', 'Trung tâm Đào tạo và Sát hạch lái xe cơ giới đường bộ Hòa Bình', 'Km 10, Quốc lộ 6, phường Đồng Minh, TP. Hòa Bình, tỉnh Hòa Bình', '+84 218 3862 622', ''),
('Hải Dương', 'Trung tâm đào tạo và sát hạch lái xe Hải Dương', '822 đại lộ Lê Thanh Nghị, TP. Hải Dương', '+84 220 3841 222', ''),
('Hải Phòng', 'Trung tâm sát hạch lái xe số 1 Hải Phòng', '45 Lạch Tray, Phường Lạch Tray, Quận Ngô Quyền, Tp Hải Phòng (trong Cung Văn hóa Thể thao Thanh niên)', '+84 225 3822 222', ''),
('Thái Bình', 'Trung tâm sát hạch tỉnh Thái Bình', 'ở Giao Thông Vận Tải Tỉnh Thái Bình, 414, Trần Hưng Đạo, Thành Phố Thái Bình, Tỉnh Thái Bình, Trần Hưng, Thái Bình, Việt Nam', '+84 227 3642 664', ''),
('Ninh Bình', 'Trung tâm sát hạch lái xe Thành Nam', '62X2+755, Triệu Việt Vương, TP. Ninh Bình, Ninh Bình', '+84 229 3873 243', ''),
('Thừa Thiên Huế', 'Trung tâm sát hạch lái xe tỉnh Thừa Thiên Huế', 'Số 18, đường Nguyễn Tất Thành, Phường Xuân Phú, Thành phố Huế, Tỉnh Thừa Thiên Huế.', '+84 235 3810 244', ''),
('Thanh Hóa', 'Trung tâm sát hạch lái xe tỉnh Thanh Hóa', 'Số 244, đường Bà Triệu, Phường Điện Biên, Thành phố Thanh Hóa, Tỉnh Thanh Hóa.', '+84 237 3856 244', ''),
('Hà Tĩnh', 'Trung tâm sát hạch lái xe CGĐB Hà Tĩnh', '290 đường Trần Phú, TP. Hà Tĩnh, Hà Tĩnh', '+84 239 3856 613', ''),
('Quảng Ngãi', 'TRUNG TÂM ĐÀO TẠO VÀ SÁT HẠCH LÁI XE', '5QWQ+WQ4, Tịnh Phong, Sơn Tịnh, Quảng Ngãi', '+84 255 3868 836', ''),
('Ninh Thuận', 'Trung tâm Đào Tạo và Sát Hạch Lái Xe Trường Cao Đẳng Nghề Ninh Thuận', 'ĐT704, Phước Mỹ, Phan Thiết, Ninh Thuận', '+84 259 3847 247', ''),
('Bình Phước', 'Trung tâm đào tạo và sát hạch lái xe thuộc Trường CĐ Công Nghiệp Cao Su', 'Số 1428, P. Tân Đồng, TP. Đồng xoài, Bình Phước', '+84 271 3856 618', ''),
('Tiền Giang', 'Trung tâm sát hạch lái xe tỉnh Tiền Giang', 'Số 1A, đường Hùng Vương, Phường 1, Thành phố Mỹ Tho, Tỉnh Tiền Giang', '+84 273 3872 244', ''),
('Yên Bái', 'Trung tâm sát hạch lái xe tỉnh Yên Bái', 'Số 18, đường Nguyễn Du, Phường Cốc Bài, Thành phố Yên Bái, Tỉnh Yên Bái', '+84 274 3852 244', ''),
('Tây Ninh', 'Trung tâm Đào Tạo &amp; Sát Hạch Lái Xe Ô Tô Tây Ninh', 'QL22B, Thanh Điền, Châu Thành, Tây Ninh, Việt Nam', '+84 276 3829 881', ''),
('Vĩnh Long', 'Trung tâm sát hạch lái xe tỉnh Vĩnh Long', 'Số 331A, Ấp Tân Vĩnh Thuận, Xã Tân Ngãi, Thành phố Vĩnh Long, Tỉnh Vĩnh Long', '+84 277 3847 244', ''),
('Trà Vinh', 'Trung tâm sát hạch lái xe tỉnh Trà Vinh', 'Số 105, đường Trần Hưng Đạo, Phường 6, Thành phố Trà Vinh, Tỉnh Trà Vinh', '+84 287 3852 244', ''),
('Cần Thơ', 'Sở GTVT Cần Thơ', 'Số 109, đường Nguyễn Trãi, phường Tân An, quận Ninh Kiều, TP Cần Thơ', '+84 292 3525 678', ''),
('Hậu Giang', 'Trung tâm sát hạch lái xe cơ giới đường bộ số 10 Hậu Giang', 'Duyệt Trung, Long Phú, Hậu Giang', '+84 293 3873 444', ''),
('Nam Định', 'Học lái xe Nam Định - Trường trung cấp gtvt Nam Định', 'Trần Huy Liệu, Vị Dương, TP. Nam Định, Nam Định', '+84 967 786 884', ''),
('Lạng Sơn', 'Trung tâm thi bằng lái xe Lạng Sơn - Trung tâm Đức Lâm ĐT&amp;SHLX', '3 Đường Khòn Cuổng, Đông Kinh, Thành phố Lạng Sơn, Lạng Sơn', '+84 967 810 228', ''),
('Lào Cai', 'Trung tâm Đào tạo và Sát hạch Lái xe Cơ Giới Đường Bộ Trực Thuộc Trường Cao Đẳng Lào Cai', 'Tầng 4, trụ sở hợp khối VII, phường Nam Cường, TP Lào Cai, tỉnh Lào Cai', '020 3856 6660', ''),
('Quảng Ninh', 'Trung tâm Sát hạch Lái xe Cơ giới Đường bộ Quảng Ninh', 'Km 10+500, Quốc lộ 18A, xã Đại Đồng, huyện Đại Lộc, tỉnh Quảng Ninh', '0203 3857 777', ''),
('Bắc Kạn', 'Trung tâm đào tại và sát hạch lái xe Bắc Kạn', 'Số 5 đường Trường Chinh, thị xã Bắc Kạn', '0209 3856 614', ''),
('Điện Biên', 'Trung tâm đào tạo &amp; sát hạch lái xe CGĐB', 'Bản Phiêng Ban, xã Thanh Nưa, huyện Điện Biên, tỉnh Điện Biên', '0215.3962.114', ''),
('Lai Châu', 'Trung tâm Sát hạch Lái xe Lai Châu', 'Số 74, đường Phan Đình Phùng, Phường Phong Hải, Thành phố Lai Châu, tỉnh Lai Châu', '0219 3873 444', ''),
('Hưng Yên', 'Trung tâm đào tạo lái xe Hưng Yên - Trường Cao đẳng Kỹ thuật Giao thông vận tải', '37 Nguyễn Văn Linh, P. Minh Khai, TP. Hưng Yên', '0221 3550 097', ''),
('Đà Nẵng', 'Sở Giao Thông Vận Tải Đà Nẵng', 'Tầng 14, tòa nhà Trung tâm Hành chính, số 24 Trần Phú, thành phố Đà Nẵng ', '02363822008', ''),
('Nghệ An', 'Trung tâm sát hạch lái xe cơ giới đường bộ Nghệ An', 'Khối Hồ Sơn, thị trấn Nam Đàn, huyện Nam Đàn, tỉnh Nghệ An', '0238.886.222', ''),
('Bắc Giang', 'Trường Trung cấp nghề GTVT Bắc Giang', 'xã Song Mai, TP Bắc Giang, tỉnh Bắc Giang', '0241 3856 613', ''),
('Bắc Ninh', 'Trung tâm đào tạo xe cơ giới đường bộ Bắc Ninh', 'Khu 7 Phường Thị Cầu,TP Bắc Ninh,Tỉnh Bắc Ninh', '0248 3856 615', ''),
('Đồng Nai', 'Trung tâm Đào tạo và Sát hạch lái xe loại I Đồng Nai', 'Trụ sở chính (Cơ sở 1): đặt tại khu phố 5, đường Huỳnh Văn Nghệ, phường Bửu Long, Thành phố Biên Hòa, tỉnh Đồng Nai', '0251.3951042', ''),
('Bình Thuận', 'Trung tâm sát hạch lái xe Bình Thuận - Cát Tường Minh', 'Thôn Tiến Bình, Xã Tiến Thành, TP. Phan Thiết, Bình Thuận', '02523745678', ''),
('Bà Rịa - Vũng Tàu', 'TRUNG TÂM DẠY NGHỀ VÀ SÁT HẠCH LÁI XE TỈNH BÀ RỊA – VŨNG TÀU', '1772V đường 30-4 – Phường 12 – TP. Vũng Tàu Vũng Tàu', '02543626278', ''),
('Bình Định', 'Sở giao thông vận tải Bình Định', 'Số 8 Lê Thánh Tôn, thành phố Qui Nhơn, tỉnh Bình Định', '0256 3856 617', ''),
('Khánh Hòa', 'Trung tâm Đào tạo và Sát hạch Lái xe Hồng Bàng', 'Trung Tâm Đào Tạo &amp; Sát Hạch Lái Xe Hồng Bàng, Suối Cát, Cam Lâm, Khánh Hòa', '0258.2211902', ''),
('Kon Tum', 'Trung tâm Đào tạo và Sát hạch Lái xe Koruco', 'KM Số 7, Phường Ngô Mây, Thành phố Kon Tum, Tỉnh Kon Tum (cách trung tâm thành phố Kon Tum khoảng 7km)', '0260.3899.999', ''),
('Đắk Nông', 'Trung tâm dạy nghề tư thục Đại Lợi', 'ĐC1: + Số 280 QL 14 - Xã Tâm Thắng - Cư JútĐC2: + Thôn Tân Tiến - Xã Quảng Thành - TX Gia Nghĩa.', '02613.548.878', ''),
('Lâm Đồng', 'Trung tâm Giáo dục nghề nghiệp tư thục Thiện Phúc Đức', 'Khu đất mới, tổ 2 - phường 7 - TP. Đà Lạt - Lâm Đồng', '0263.3565056', ''),
('Bình Dương', 'Sở Giao Thông Vận Tải Tỉnh Bình Dương', 'Tầng 12A - tháp A, Tòa nhà Trung tâm hành chính tập trung tỉnh Bình Dương Đường Lê Lợi, Phường Hòa Phú, Thành phố Thủ Dầu Một, Tỉnh Bình Dương', '02743824330', ''),
('Đồng Tháp', 'TRUNG TÂM GIÁO DỤC NGHỀ NGHIỆP KỸ THUẬT GIAO THÔNG ĐỒNG THÁP', 'số 314, Lê Đại Hành, Phường Mỹ Phú, thành phố Cao Lãnh, tỉnh Đồng Tháp', '02773.851.531', ''),
('Bến Tre', 'Trung tâm hành chính công tỉnh Bến Tre', 'Số 126A, đường Nguyễn Thị Định, phường Phú Tân, thành phố Bến Tre, tỉnh Bến Tre', '0284 3856 616', ''),
('Cà Mau', 'Ban An Toàn Giao Thông Tỉnh Cà Mau', 'Địa chỉ: 269 - Trần Hưng Đạo - phường 5 - thành phố Cà Mau', '02903818129', ''),
('An Giang', 'Trung Tâm Đào Tạo Và Sát Hạch Lái Xe Châu Đốc', '246 Đường Tránh, QL91, Khóm Châu Long 8, Châu Đốc, An Giang', '02963568866', ''),
('Kiên Giang', 'Trung tâm Đào tạo và Sát hạch Lái xe - Trường Cao đẳng Kiên Giang', 'Số 48, đường Trần Hưng Đạo, phường Vĩnh Lạc, TP. Rạch Giá, tỉnh Kiên Giang', '0297 3856 620', ''),
('Quảng Nam', 'Trung tâm Sát hạch Lái xe Quảng Nam', 'Thôn Thanh Ly 1, Thăng Bình, Quảng Nam', '0365 530 415', ''),
('Long An', 'Trung tâm đào tạo lái xe - Trường Cao đẳng Long An', '740 Đỗ Trình Thoại', '0393 121 280', ''),
('Quảng Trị', 'Trung tâm Đào tạo và Sát hạch Lái xe Quảng Trị', '148 Lê Lợi, TP. Đông Hà, Quảng Trị', '0515 3812 222', ''),
('Hà Nam', 'Trung tâm sát hạch lái xe cơ giới đường bộ', 'Hà Nam. đường Đinh Tiên Hoàng – Tp. Phủ Lý – Hà Nam', '089.8910.333', ''),
('Sóc Trăng', 'Trung tâm đào tạo lái xe ô tô B2 và C ở Sóc Trăng', '48 Hùng Vương, Phường 6, Tp Sóc Trăng (cách Coopmart tầm 100m)', '0918 007 999', ''),
('Phú Yên', 'Trung tâm sát hạch lái xe cơ giới đường bộ tỉnh Phú Yên', 'Km 1319+300, Quốc lộ 1A, xã An Chấn, huyện Tuy An, tỉnh Phú Yên.', '093 568 8279', ''),
('Quảng Bình', 'Trung tâm sát hạch lái xe B2 Quảng Bình', 'Xã Đức Ninh, TP Đồng Hới, Quảng Bình', '0963 358 333', ''),
('Đắk Lắk', 'Trung tâm GDNN Vinasme Tây Nguyên', '03 Phạm Hùng – BMT', '0983570421', ''),
('Bạc Liêu', 'Trung tâm Giáo dục nghề nghiệp - Giáo dục thường xuyên huyện Hồng Dân', 'Đường Tôn Đức Thắng, khóm 10, phường 1, TP Bạc Liêu', 'Chưa cập nhật', '');

-- --------------------------------------------------------

--
-- Table structure for table `lich_su_lam_bai`
--

CREATE TABLE `lich_su_lam_bai` (
  `ngaylambai` text NOT NULL,
  `MaLamBai` int(11) NOT NULL,
  `username` text NOT NULL,
  `de` int(11) NOT NULL,
  `ketqua` text NOT NULL,
  `dapan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `lich_su_lam_bai`
--

INSERT INTO `lich_su_lam_bai` (`ngaylambai`, `MaLamBai`, `username`, `de`, `ketqua`, `dapan`) VALUES
('27/6/2024', 489, 'phu6', 4, '0', '1:2-2:2-3:3-4:3-5:2-'),
('27/6/2024', 534, 'phu6', 1, '0', ''),
('26/6/2024', 1607, 'phu', 1, '2', '1:2-2:1-3:2-4:2-5:3-'),
('15/6/2024', 2863, 'phu', 1, '4', '1:2-3:2-4:2-5:1-6:2-7:2-9:2-10:2-'),
('15/6/2024', 3055, 'phu', 1, '3', '1:2-2:2-3:2-4:2-5:2-'),
('14/6/2024', 3734, 'phu', 1, '13', '1:2-2:1-3:2-4:2-5:2-6:2-7:2-8:2-9:2-10:1-11:2-12:1-13:2-14:2-15:2-16:1-17:2-18:2-19:1-20:2-21:2-22:1-23:2-24:1-25:2-26:2-27:1-28:2-29:2-30:2-'),
('18/6/2024', 5611, 'phu', 1, '30', '1:2-2:4-3:2-4:1-5:2-6:3-7:2-8:2-9:2-10:1-11:1-12:2-13:2-14:1-15:3-16:3-17:3-18:2-19:1-20:1-21:2-22:2-23:2-24:3-25:3-26:1-27:2-28:3-29:2-30:1-'),
('25/6/2024', 5656, 'phu', 3, '1', '1:2-2:2-3:2-4:2-'),
('25/6/2024', 6704, 'phu', 1, '0', ''),
('25/6/2024', 8695, 'phu', 1, '0', ''),
('18/6/2024', 9660, 'phu', 1, '15', '1:2-2:2-3:2-4:2-5:2-6:2-7:2-8:2-9:2-10:2-11:2-12:1-13:2-14:2-15:2-16:2-17:2-18:2-19:1-20:1-21:2-22:2-23:1-24:2-25:3-26:2-27:2-28:2-29:2-30:2-');

-- --------------------------------------------------------

--
-- Table structure for table `video_mo_phong`
--

CREATE TABLE `video_mo_phong` (
  `de` int(11) NOT NULL,
  `cau` int(11) NOT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) NOT NULL,
  `dodaivideo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `video_mo_phong`
--

INSERT INTO `video_mo_phong` (`de`, `cau`, `start`, `end`, `dodaivideo`) VALUES
(1, 1, 17, 20, 27),
(1, 2, 24, 28, 39),
(1, 3, 21, 25, 34),
(1, 4, 17, 22, 34),
(1, 5, 18, 24, 33),
(1, 6, 19, 24, 30),
(1, 7, 17, 22, 33),
(1, 8, 17, 21, 34),
(1, 9, 14, 18, 23),
(1, 10, 18, 23, 31),
(1, 11, 17, 25, 32),
(1, 12, 20, 23, 36),
(1, 13, 17, 21, 30),
(1, 14, 20, 25, 34),
(1, 15, 19, 23, 33),
(1, 16, 17, 21, 30),
(1, 17, 14, 18, 29),
(1, 18, 17, 22, 31),
(1, 19, 19, 22, 28),
(1, 20, 25, 29, 37),
(1, 21, 20, 24, 39),
(1, 22, 19, 23, 32),
(1, 23, 21, 25, 32),
(1, 24, 20, 24, 34),
(1, 25, 17, 25, 45),
(2, 26, 19, 24, 43),
(2, 27, 20, 24, 34),
(2, 28, 18, 22, 35),
(2, 29, 18, 23, 33),
(2, 30, 17, 22, 37),
(2, 31, 16, 22, 37),
(2, 32, 17, 23, 29),
(2, 33, 19, 23, 33),
(2, 34, 15, 20, 27),
(2, 35, 13, 17, 27),
(2, 36, 23, 27, 34),
(2, 37, 24, 28, 35),
(2, 38, 18, 21, 32),
(2, 39, 21, 25, 31),
(2, 40, 16, 21, 34),
(2, 41, 19, 22, 33),
(2, 42, 17, 20, 31),
(2, 43, 16, 21, 35),
(2, 44, 14, 19, 27),
(2, 45, 19, 23, 29),
(2, 46, 26, 31, 37),
(2, 47, 24, 29, 36),
(2, 48, 14, 18, 33),
(2, 49, 16, 22, 33),
(2, 50, 18, 23, 35),
(3, 51, 18, 25, 36),
(3, 52, 22, 27, 34),
(3, 53, 22, 27, 35),
(3, 54, 19, 24, 31),
(3, 55, 17, 22, 36),
(3, 56, 17, 20, 27),
(3, 57, 30, 38, 59),
(3, 58, 24, 29, 46),
(3, 59, 27, 31, 38),
(3, 60, 17, 21, 33),
(3, 61, 26, 31, 37),
(3, 62, 25, 30, 36),
(3, 63, 14, 19, 30),
(3, 64, 20, 25, 33),
(3, 65, 27, 32, 42),
(3, 66, 19, 23, 28),
(3, 67, 22, 27, 38),
(3, 68, 21, 24, 32),
(3, 69, 24, 28, 37),
(3, 70, 38, 43, 58),
(3, 71, 21, 27, 36),
(3, 72, 25, 30, 36),
(3, 73, 25, 28, 37),
(3, 74, 21, 26, 38),
(3, 75, 15, 19, 29),
(4, 76, 16, 20, 32),
(4, 77, 16, 20, 32),
(4, 78, 21, 25, 30),
(4, 79, 19, 23, 34),
(4, 80, 16, 20, 26),
(4, 81, 25, 29, 34),
(4, 82, 16, 22, 35),
(4, 83, 17, 21, 30),
(4, 84, 19, 24, 31),
(4, 85, 26, 29, 39),
(4, 86, 14, 19, 30),
(4, 87, 13, 18, 34),
(4, 88, 21, 24, 31),
(4, 89, 18, 22, 30),
(4, 90, 16, 21, 29),
(4, 91, 15, 20, 31),
(4, 92, 15, 19, 25),
(4, 93, 23, 27, 36),
(4, 94, 27, 32, 40),
(4, 95, 15, 21, 28),
(4, 96, 27, 31, 33),
(4, 97, 29, 32, 46),
(4, 98, 23, 28, 39),
(4, 99, 26, 30, 38),
(4, 100, 17, 21, 30),
(5, 101, 21, 25, 36),
(5, 102, 21, 26, 31),
(5, 103, 26, 30, 36),
(5, 104, 29, 32, 40),
(5, 105, 20, 23, 30),
(5, 106, 26, 30, 40),
(5, 107, 21, 25, 41),
(5, 108, 29, 32, 36),
(5, 109, 19, 23, 31),
(5, 110, 18, 22, 32),
(5, 111, 18, 22, 24),
(5, 112, 13, 18, 27),
(5, 113, 23, 27, 32),
(5, 114, 18, 24, 37),
(5, 115, 19, 23, 30),
(5, 116, 17, 22, 30),
(5, 117, 17, 21, 25),
(5, 118, 17, 23, 29),
(5, 119, 18, 22, 36),
(5, 120, 20, 24, 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `600_cau_hoi`
--
ALTER TABLE `600_cau_hoi`
  ADD PRIMARY KEY (`cau`);

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `bodeonthiblx`
--
ALTER TABLE `bodeonthiblx`
  ADD PRIMARY KEY (`DeSo`);

--
-- Indexes for table `bo_de_thi_mo_phong`
--
ALTER TABLE `bo_de_thi_mo_phong`
  ADD PRIMARY KEY (`DeSo`);

--
-- Indexes for table `dstinh`
--
ALTER TABLE `dstinh`
  ADD PRIMARY KEY (`SDT`);

--
-- Indexes for table `lich_su_lam_bai`
--
ALTER TABLE `lich_su_lam_bai`
  ADD PRIMARY KEY (`MaLamBai`);

--
-- Indexes for table `video_mo_phong`
--
ALTER TABLE `video_mo_phong`
  ADD PRIMARY KEY (`cau`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `600_cau_hoi`
--
ALTER TABLE `600_cau_hoi`
  MODIFY `cau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=601;

--
-- AUTO_INCREMENT for table `bodeonthiblx`
--
ALTER TABLE `bodeonthiblx`
  MODIFY `DeSo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bo_de_thi_mo_phong`
--
ALTER TABLE `bo_de_thi_mo_phong`
  MODIFY `DeSo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `video_mo_phong`
--
ALTER TABLE `video_mo_phong`
  MODIFY `cau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
