
<ul data-role="listview" data-filter="true" data-theme="a">
        <?php
                $data = $this->dataProvider->getData();
                $owner = $this->getOwner();
                foreach ($data as $i=>$item) {
                        echo "<li>";
                        $owner->renderPartial($this->itemView, $item);
                        echo "</li>";
                }
        ?>
</ul>


