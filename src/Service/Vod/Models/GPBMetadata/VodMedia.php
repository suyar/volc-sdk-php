<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_media.proto

namespace Volc\Service\Vod\Models\GPBMetadata;

class VodMedia
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Volc\Service\Vod\Models\GPBMetadata\VodCommon::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa5380a1c766f642f627573696e6573732f766f645f6d656469612e70726f746f121e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e65737322ee010a11566f644d656469614261736963496e666f12110a0953706163654e616d65180120012809120b0a03566964180220012809120d0a055469746c6518032001280912130a0b4465736372697074696f6e18042001280912110a09506f7374657255726918052001280912150a0d5075626c697368537461747573180620012809120c0a045461677318072003280912120a0a43726561746554696d6518082001280912490a0e436c617373696669636174696f6e18092001280b32312e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64436c617373696669636174696f6e22e1010a0c566f644d65646961496e666f12440a094261736963496e666f18012001280b32312e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644d656469614261736963496e666f12410a0a536f75726365496e666f18022001280b322d2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64536f75726365496e666f12480a0e5472616e73636f6465496e666f7318032003280b32302e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f645472616e73636f6465496e666f22710a14566f644765744d65646961496e666f734461746112430a0d4d65646961496e666f4c69737418012003280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644d65646961496e666f12140a0c4e6f7445786973745669647318022003280922320a10566f6453746f726555726947726f7570120b0a0356696418012001280912110a0953746f72655572697318022003280922750a13566f64476574526563506f737465724461746112480a0e53746f726555726947726f75707318012003280b32302e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f6453746f726555726947726f757012140a0c4e6f74457869737456696473180220032809222a0a12566f6444656c6574654d656469614461746112140a0c4e6f7445786973745669647318012003280922320a17566f6444656c6574655472616e73636f6465734461746112170a0f4e6f74457869737446696c6549647318012003280922a3010a13566f644765744d656469614c6973744461746112110a0953706163654e616d6518012001280912430a0d4d65646961496e666f4c69737418022003280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644d65646961496e666f12120a0a546f74616c436f756e74180320012805120e0a064f666673657418042001280512100a085061676553697a6518052001280522360a1b566f645570646174655375627469746c655374617475734461746112170a0f4e6f74457869737446696c6549647318012003280922700a13566f6446696c655375627469746c65496e666f120e0a0646696c65496418012001280912490a105375627469746c65496e666f4c69737418022003280b322f2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f645375627469746c65496e666f22cb010a1a566f644765745375627469746c65496e666f4c69737444617461120b0a0356696418012001280912510a1446696c655375627469746c65496e666f4c69737418022003280b32332e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f6446696c655375627469746c65496e666f12170a0f4e6f74457869737446696c6549647318032003280912120a0a546f74616c436f756e74180420012805120e0a064f666673657418052001280512100a085061676553697a6518062001280522710a14566f644672616d6544617461466f72417564697412100a0853746f726555726918012001280912130a0b4672616d654e756d62657218022001280512130a0b43757454696d654d696c6c180320012801120d0a055769647468180420012805120e0a0648656967687418052001280522620a1a566f644765744672616d6573466f724175646974526573756c7412440a064672616d657318012003280b32342e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644672616d6544617461466f724175646974229f010a1a566f644265747465724672616d6544617461466f72417564697412100a0853746f726555726918012001280912130a0b4672616d654e756d62657218022001280512130a0b43757454696d654d696c6c180320012801120d0a055769647468180420012805120e0a0648656967687418052001280512110a09436f7665725261746518062001280112130a0b4c425048617368436f6465180720032801226e0a20566f644765744265747465724672616d6573466f724175646974526573756c74124a0a064672616d657318012003280b323a2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644265747465724672616d6544617461466f724175646974224a0a14566f64417564696f496e666f466f72417564697412100a0853746f726555726918012001280912100a084475726174696f6e180220012801120e0a06466f726d617418032001280922680a1d566f64476574417564696f496e666f466f724175646974526573756c7412470a09417564696f496e666f18012001280b32342e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64417564696f496e666f466f724175646974226e0a1b566f644153525574746572616e6365576f7264466f724175646974120c0a045465787418012001280912150a0d537461727454696d654d696c6c18022001280112130a0b456e6454696d654d696c6c18032001280112150a0d426c616e6b4475726174696f6e180420012801223c0a20566f64437265617465566964656f436c617373696669636174696f6e4461746112180a10436c617373696669636174696f6e496418012001280322bb020a11566f64436c617373696669636174696f6e12110a0953706163654e616d6518012001280912180a10436c617373696669636174696f6e4964180220012803120d0a054c6576656c18032001280512160a0e436c617373696669636174696f6e180420012809121e0a16506172656e74436c617373696669636174696f6e4964180520012803124c0a11537562436c617373696669636174696f6e18062001280b32312e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64436c617373696669636174696f6e12510a16537562436c617373696669636174696f6e547265657318072003280b32312e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64436c617373696669636174696f6e12110a09437265617465644174180820012809226d0a1b566f64566964656f436c617373696669636174696f6e7344617461124e0a13436c617373696669636174696f6e547265657318012003280b32312e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64436c617373696669636174696f6e22c5010a17566f644153525574746572616e6365466f724175646974120c0a045465787418012001280912150a0d537461727454696d654d696c6c18022001280112130a0b456e6454696d654d696c6c180320012801124a0a05576f72647318042003280b323b2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644153525574746572616e6365576f7264466f72417564697412100a084c616e677561676518052001280912120a0a53706565636852617465180620012801223e0a1c566f644153524c616e677561676544657461696c466f724175646974120c0a0450726f6218012001280112100a084c616e677561676518022001280922fc010a12566f64415352496e666f466f724175646974120c0a0454657874180120012809124b0a0a5574746572616e63657318032003280b32372e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644153525574746572616e6365466f72417564697412100a084c616e677561676518042001280912550a0f4c616e677561676544657461696c7318052003280b323c2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644153524c616e677561676544657461696c466f72417564697412120a0a53706565636852617465180620012801120e0a06566f6c756d6518072001280122720a2e566f644765744175746f6d617469635370656563685265636f676e6974696f6e466f724175646974526573756c7412400a04496e666f18012001280b32322e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64415352496e666f466f72417564697422530a17566f6441454454696d6552616e6765466f72417564697412150a0d537461727454696d654d696c6c18012001280112130a0b456e6454696d654d696c6c180220012801120c0a0450726f621803200128012286010a17566f644145444576656e744974656d466f724175646974120d0a054576656e74180120012809120f0a0755747450726f62180220012801124b0a0a54696d6552616e67657318032003280b32372e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f6441454454696d6552616e6765466f72417564697422610a12566f64414544496e666f466f724175646974124b0a0a4576656e744974656d7318012003280b32372e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644145444576656e744974656d466f724175646974226b0a27566f64476574417564696f4576656e74446574656374696f6e466f724175646974526573756c7412400a04496e666f18012001280b32322e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64414544496e666f466f724175646974225b0a0b566f64536e617073686f74120e0a06466f726d6174180120012809120e0a06486569676874180220012805120d0a05576964746818032001280512100a0853746f7265557269180420012809120b0a0355726c18052001280922b3010a11566f64537072697465536e617073686f74120e0a06466f726d6174180120012809120f0a07496d67584c656e180220012805120f0a07496d67594c656e18032001280512110a0943656c6c576964746818042001280512120a0a43656c6c48656967687418052001280512100a08496e74657276616c18062001280212120a0a436170747572654e756d18072001280512110a0953746f726555726973180820032809120c0a0455726c7318092003280922a1030a0f566f64536e617073686f744461746112110a0953706163654e616d65180120012809120b0a0356696418022001280912440a0f506f73746572536e617073686f747318032003280b322b2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64536e617073686f7412450a1044796e706f7374536e617073686f747318042003280b322b2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64536e617073686f74124c0a17416e696d61746564506f73746572536e617073686f747318052003280b322b2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64536e617073686f7412470a12416944796e706f7374536e617073686f747318062003280b322b2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64536e617073686f74124a0a0f537072697465536e617073686f747318072003280b32312e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64537072697465536e617073686f74225c0a16566f644d656469615375627469746c6544657461696c12100a084c616e6775616765180120012809120e0a06466f726d617418022001280912130a0b5375627469746c6555726c180320012809120b0a03546167180420012809224e0a10566f644d65646961506c6179496e666f12130a0b4d61696e506c617955726c18012001280912150a0d4261636b7570506c617955726c180220012809120e0a06537461747573180320012805223d0a15566f644d65646961506f7374657255726c496e666f12110a09506f7374657255726918012001280912110a09506f7374657255726c18022001280922e5010a12566f644d65646961506f73746572496e666f12150a0d4d61696e506f7374657255726918012001280912180a104261636b7570506f7374657255726973180220032809124d0a0e4d61696e506f73746572496e666f18032001280b32352e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644d65646961506f7374657255726c496e666f124f0a104261636b7570506f73746572496e666f18042003280b32352e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644d65646961506f7374657255726c496e666f22dc010a12566f6443617465676f7279546167496e666f120d0a055461674964180120012803120c0a0450726f62180220012801120f0a075461674e616d65180320012809120d0a054c6576656c18042001280312560a0a506172656e74496e666f18052003280b32422e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f6443617465676f7279546167496e666f2e506172656e74496e666f456e7472791a310a0f506172656e74496e666f456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a02380122b7040a12566f64566964656f44657461696c496e666f120d0a055469746c65180120012809120b0a0356696418022001280912150a0d5075626c69736853746174757318032001280912100a084475726174696f6e180420012801120d0a05436f646563180520012809120e0a06486569676874180620012803120d0a055769647468180720012803120e0a06466f726d6174180820012809120c0a0453697a65180920012803120f0a0742697472617465180a20012803120c0a0454616773180b2003280912130a0b4465736372697074696f6e180c2001280912110a09506f7374657255726c180d2001280912420a08506c6179496e666f180e2001280b32302e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644d65646961506c6179496e666f12460a0a506f73746572496e666f180f2001280b32322e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644d65646961506f73746572496e666f12130a0b4372656174656454696d6518102001280912130a0b5570646174656454696d6518112001280912480a0c43617465676f72795461677318122003280b32322e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f6443617465676f7279546167496e666f12490a0e436c617373696669636174696f6e18132001280b32312e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64436c617373696669636174696f6e22b2030a13566f64456e636f646564566964656f496e666f120e0a0646696c65494418012001280912120a0a446566696e6974696f6e180220012809120e0a06466f726d6174180320012809120d0a05436f64656318042001280912130a0b456e636f6465645479706518052001280912100a084475726174696f6e180620012801120f0a075175616c69747918072001280912100a084c6f676f54797065180820012809120e0a06486569676874180920012803120d0a055769647468180a20012803120f0a0742697472617465180b20012803120c0a0453697a65180c2001280312420a08506c6179496e666f180d2001280b32302e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644d65646961506c6179496e666f124f0a0f5375627469746c6544657461696c73180e2003280b32362e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644d656469615375627469746c6544657461696c12130a0b4372656174656454696d65180f2001280912130a0b5570646174656454696d6518102001280912110a09506c61795363656e6518112001280922f1020a0e566f64566964656f44657461696c12110a0953706163654e616d65180120012809120b0a03566964180220012809124b0a0f566964656f44657461696c496e666f18032001280b32322e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64566964656f44657461696c496e666f124e0a114f726967696e616c566964656f496e666f18042001280b32332e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64456e636f646564566964656f496e666f124e0a11456e636f646564566964656f496e666f7318052003280b32332e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64456e636f646564566964656f496e666f12520a154c6f676f456e636f646564566964656f496e666f7318062003280b32332e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64456e636f646564566964656f496e666f22590a12566f64566964656f44657461696c4461746112430a0b566964656f44657461696c18012001280b322e2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64566964656f44657461696c2ad0020a20566f644672616d6545787472616374696e674f7074696f6e466f724175646974122d0a29556e646566696e6564566f644672616d6545787472616374696e674f7074696f6e466f724175646974100012270a23467073566f644672616d6545787472616374696e674f7074696f6e466f724175646974100112320a2e4e756d6265724f664672616d6573566f644672616d6545787472616374696e674f7074696f6e466f7241756469741002122c0a2843757454696d6573566f644672616d6545787472616374696e674f7074696f6e466f7241756469741003123a0a364670734c696d69744e756d6265724f664672616d6573566f644672616d6545787472616374696e674f7074696f6e466f724175646974100412360a324f6e6c7946697273744c6173744672616d65566f644672616d6545787472616374696e674f7074696f6e466f724175646974100542cc010a29636f6d2e766f6c63656e67696e652e736572766963652e766f642e6d6f64656c2e627573696e6573734208566f644d6564696150015a416769746875622e636f6d2f766f6c63656e67696e652f766f6c632d73646b2d676f6c616e672f736572766963652f766f642f6d6f64656c732f627573696e657373a00101d80101c20200ca0220566f6c635c536572766963655c566f645c4d6f64656c735c427573696e657373e20223566f6c635c536572766963655c566f645c4d6f64656c735c4750424d65746164617461620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

