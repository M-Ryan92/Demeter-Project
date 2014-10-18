            <div class="row">
                <?php if(!isset($size)){ $size = "";} ?>
                <div class="<?php echo $size; ?>">
                    <?php 
                        $i=0;
                        foreach ($content as $item) {                        
                            echo $item($input[$i]);
                            $i++;
                        }
                    ?>
                </div>
            </div>