<?php
$tealCardBG = get_sub_field( 'teal_card_background' );
$imageAsIcon = get_sub_field( 'image_as_icon' );
?>

<div class="container-lg">
    <div class="row">
        <?php if ( $header ) : ?>
        <div class="header col-sm-10 offset-sm-1 col-md-6 offset-md-1 <?php echo in_array( $columns, array( 'Three', 'Four' ) ) ? 'col-lg-12 offset-lg-0' : 'col-lg-8 offset-lg-2'; ?>">
            <<?php echo $headerSize ?>>
                <?php echo $header ?>
            </<?php echo $headerSize ?>>
        </div>
        <?php endif; ?>
    </div>

    <div class="row">
        <div class="col-sm-10 offset-sm-1 col-md-10 offset-md-1 <?php echo in_array( $columns, array( 'Three', 'Four' ) ) ? 'col-lg-12 offset-lg-0' : 'col-lg-8 offset-lg-2'; ?>">
            <div class="row">
                <?php foreach ( $cards as $key => $card ) : ?>
                    <div class="grid col-sm-6 <?php echo in_array( $columns, array( 'Three', 'Four' ) ) ? 'col-lg-4' : 'col-lg-6'; ?>" data-image-as-icon="<?php echo $imageAsIcon ?>" data-teal-bg="<?php echo $tealCardBG ?>">
                        <?php include( 'info-boxes-card.php' ); ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php unset( $imageType ); ?>