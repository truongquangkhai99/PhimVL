﻿					
					<?php
						$querySLC = "select * from film_cataloge order by film_cataloge_id asc";
						$resultSLC = mysql_query($querySLC);
						$querySLCon = "select * from film_country order by film_country_id asc";
						$resultSLCon = mysql_query($querySLCon);
						$querySLNSX = "select * from film_nhasx order by film_nhasx_id asc";
						$resultSLNSX = mysql_query($querySLNSX);
					?>
					<div class="tab-pane fade" id="addFilmLe">
					<h1 class="text-center text-danger">Thêm Dữ Liệu Phim Lẻ</h1>
					<div class="well">
						<form method="POST" action="addEditDelete/addFilmLe.php" class="form-horizontal" id="management">
							<div class="form-group">
								<label class="control-label col-md-2">Tên Phim Lẻ</label>
								<div class="col-md-8">
								<input type="text" name="tenFilmLe" class="form-control required" value="" placeholder="Nhập Tên Tiếng Anh"  />
								</div>
								<div class="col-md-offset-2"></div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Tên Phim(Tiếng Việt)</label>
								<div class="col-md-8">
								<input type="text" name="tenFilmLeVi" class="form-control required" value="" placeholder="Nhập Tên Tiếng Việt"  />
								</div>
								<div class="col-md-offset-2"></div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Năm Sản Xuất</label>
								<div class="col-md-8">
								<select name="namSX" class="form-control">
									<?php
									for ($i=1800; $i <= date('Y'); $i++) { 
										if($i==date('Y')){
											?>
											<option selected="" value="<?php echo($i); ?>"><?php echo($i); ?></option>
											<?php
										}
										else {
											?>
											<option value="<?php echo($i); ?>"><?php echo($i); ?></option>
											<?php
										}
									}
									?>
								</select>
								</div>
								<div class="col-md-offset-2"></div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Thể Loại 1</label>
								<div class="col-md-8">
									<select name="theLoai1" class="form-control">
										<?php
										while($rowC = mysql_fetch_array($resultSLC))
										{
										?>
										<option value="<?php echo($rowC['0']); ?>" ><?php echo($rowC['1']); ?></option>
										<?php
										}
										?>
									</select>
								</div>
								<div class="col-md-offset-2"></div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Thể Loại 2</label>
								<div class="col-md-8">
									<select name="theLoai2" class="form-control">
										<?php
										mysql_data_seek($resultSLC, 0);
										while($rowC = mysql_fetch_array($resultSLC))
										{
										?>
										<option value="<?php echo($rowC['0']); ?>" ><?php echo($rowC['1']); ?></option>
										<?php
										}
										?>
									</select>
								</div>
								<div class="col-md-offset-2"></div>
							</div>						
							<div class="form-group">
								<label class="control-label col-md-2">Thể Loại 3</label>
								<div class="col-md-8">
									<select name="theLoai3" class="form-control">
										<?php
										mysql_data_seek($resultSLC, 0);
										while($rowC = mysql_fetch_array($resultSLC))
										{
										?>
										<option value="<?php echo($rowC['0']); ?>" ><?php echo($rowC['1']); ?></option>
										<?php
										}
										?>
									</select>
								</div>
								<div class="col-md-offset-2"></div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Nước Sản Xuất</label>
								<div class="col-md-8">
									<select name="nuocSX" class="form-control">
										<?php
										
										while($rowCon = mysql_fetch_array($resultSLCon))
										{
										?>
										<option value="<?php echo($rowCon['0']); ?>" ><?php echo($rowCon['1']); ?></option>
										<?php
										}
										?>
									</select>
								</div>
								<div class="col-md-offset-2"></div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Nhà Sản Xuất</label>
								<div class="col-md-8">
									<select name="nhaSX" class="form-control">
										<?php
										
										while($rowNSX = mysql_fetch_array($resultSLNSX))
										{
										?>
										<option value="<?php echo($rowNSX['0']); ?>" ><?php echo($rowNSX['1']); ?></option>
										<?php
										}
										?>
									</select>
								</div>
								<div class="col-md-offset-2"></div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Nội Dung</label>
								<div class="col-md-8">
									<textarea name="noiDung" id="editor" class="required"></textarea>
								</div>
								<div class="col-md-offset-2"></div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Hình Avatar</label>
								<div class="col-md-8">
								<input type="text" name="avatar" class="form-control url required" value="" placeholder="Nhập URL Hình"  />
								</div>
								<div class="col-md-offset-2"></div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Hình Cover</label>
								<div class="col-md-8">
								<input type="text" name="cover" class="form-control url required" value="" placeholder="Nhập URL Hình"  />
								</div>
								<div class="col-md-offset-2"></div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Tên Đạo Diễn</label>
								<div class="col-md-8">
								<input type="text" name="tenDaoDien" class="form-control required" minlength="3" value="" placeholder="Nhập Tên Đạo Diễn"  />
								</div>
								<div class="col-md-offset-2"></div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Tên Diễn Viên</label>
								<div class="col-md-8">
								<input type="text" name="tenDienVien" class="form-control required" minlength="3" value="" placeholder="Nhập Tên Các Diễn Viên"  />
								</div>
								<div class="col-md-offset-2"></div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Link Phim</label>
								<div class="col-md-8">
								<input type="text" name="link" class="form-control url required" value="" placeholder="Nhập Link Phim"  />
								</div>
								<div class="col-md-offset-2"></div>
							</div>
							<div class="form-group">
								<div class="col-md-offset-2 col-md-8">
									<div class="btn-group">
										<a href="#tableFilmLe" data-toggle="tab" class="btn btn-info text-center">Hủy</a>
									</div>
									
									<div class="btn-group">
										<button type="submit" class="btn btn-default">Đồng Ý</button>
									</div>
									
									<div class="btn-group">
										<button type="reset" class="btn btn-warning">Làm Tươi Form</button>
									</div>
								</div>
							</div>
						</form>
						
					</div>
				</div>
				<div class="tab-pane active fade in" id="tableFilmLe">
					<?php
					$query = "SELECT `film_le_id`,`film_le_name`,`film_le_name_vi`,`film_le_namsx`,
					B.film_cataloge_name,C.film_cataloge_name,D.film_cataloge_name,E.film_country_name,F.film_nhasx_name,
					`film_le_avatar`,`film_le_cover`,`film_le_daodien`,`film_le_dienvien`,`film_le_link`,`film_le_postdate`,`film_le_viewed`,
					`film_le_rate` FROM film_le A,film_cataloge B,film_cataloge C,film_cataloge D,film_country E,film_nhasx F 
					WHERE A.film_le_cataloge_id_first = B.film_cataloge_id and A.film_le_cataloge_id_second = C.film_cataloge_id and
					 A.film_le_cataloge_id_third = D.film_cataloge_id and A.film_le_country_id = E.film_country_id and
					  A.film_le_nhasx_id = F.film_nhasx_id";
					$result = mysql_query($query);

					mysql_close($link);
					?>
					<h1 class="text-danger">Bảng Dữ Liệu Phim Lẻ</h1>
					<div class="btn-group">
						<a href="#addFilmLe" data-transition="flow" data-toggle="tab" class="btn btn-info">Thêm Mới</a>
					</div>
					<div class="btn-group">
						<a href="index-admin.php?changePage=8" class="btn btn-default">Làm Tươi Trang</a>
					</div>
					<hr />
					<div class="table-responsive table-scrollable">
						<table class="table table-bordered table-condensed table-striped table-hover">
							<thead style="white-space: nowrap;">
								<tr>
									<th class="lead">STT</th>
									<th class="lead">ID Phim</th>
									<th class="lead">Tên Phim</th>
									<th class="lead">Tên Phim(Tiếng Việt)</th>
									<th class="lead">Năm Sản Xuất</th>
									<th class="lead">Thể Loại</th>
									<th class="lead">Nước</th>
									<th class="lead">Nhà SX</th>
									<th class="lead">Ảnh Avatar</th>
									<th class="lead">Ảnh Cover</th>
									<th class="lead">Đạo Diễn</th>
									<th class="lead">Diễn Viên</th>
									<th class="lead">Link Phim</th>
									<th class="lead">Ngày Đăng</th>
									<th class="lead">Lượt View</th>
									<th class="lead">Rating</th>
									<th>&nbsp;</th>
								</tr>
								
							</thead>
							<tbody style="white-space: nowrap;">
								<?php
								$i = 1;
								if($result){
								while ($row = mysql_fetch_array($result)) {

								?>
								<tr>
									<!-- <script>$('[data-toggle="tooltip"]').tooltip({'placement': 'top'});</script> -->
									<td><?php echo($i++); ?></td>
									<td><?php echo($row['0'])?></td>
									<td><?php echo($row['1']); ?></td>
									<td><?php echo($row['2']); ?></td>
									<td><?php echo($row['3']); ?></td>
									<td><?php echo($row['4']." | ".$row['5']." | ".$row['6']); ?></td>
									<td><?php echo($row['7']); ?></td>
									<td><?php echo($row['8']); ?></td>
									<td><?php echo($row['9']); ?></td>
									<td><?php echo($row['10']); ?></td>
									<td><?php echo($row['11']); ?></td>
									<td><?php echo($row['12']); ?></td>
									<td><?php echo($row['13']); ?></td>
									<td><?php echo($row['14']); ?></td>
									<td><?php echo($row['15']); ?></td>
									<td><?php echo($row['16']); ?></td>
									<td>
										<a href="addEditDelete/editOneFilmLe.php?filmLeID=<?php echo($row['0']); ?>">Sửa</a>
										&nbsp;
										<a href="addEditDelete/deleteOneFilmLe.php?filmLeID=<?php echo($row['0']); ?>&filmLeName=<?php echo($row['1']); ?>">Xóa</a>
									</td>
								</tr>
								<?php
								}
								}
								?>
							</tbody>
						</table>
					</div>
					<hr />
				</div>
				