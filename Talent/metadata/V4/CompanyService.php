<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4/company_service.proto

namespace GPBMetadata\Google\Cloud\Talent\V4;

class CompanyService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4\Common::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4\Company::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab5100a2c676f6f676c652f636c6f75642f74616c656e742f76342f636f6d70616e795f736572766963652e70726f746f1216676f6f676c652e636c6f75642e74616c656e742e76341a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a23676f6f676c652f636c6f75642f74616c656e742f76342f636f6d6d6f6e2e70726f746f1a24676f6f676c652f636c6f75642f74616c656e742f76342f636f6d70616e792e70726f746f1a1b676f6f676c652f70726f746f6275662f656d7074792e70726f746f1a20676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e70726f746f2281010a14437265617465436f6d70616e795265717565737412320a06706172656e741801200128094222e04102fa411c0a1a6a6f62732e676f6f676c65617069732e636f6d2f54656e616e7412350a07636f6d70616e7918022001280b321f2e676f6f676c652e636c6f75642e74616c656e742e76342e436f6d70616e794203e0410222460a11476574436f6d70616e795265717565737412310a046e616d651801200128094223e04102fa411d0a1b6a6f62732e676f6f676c65617069732e636f6d2f436f6d70616e79227e0a14557064617465436f6d70616e795265717565737412350a07636f6d70616e7918012001280b321f2e676f6f676c652e636c6f75642e74616c656e742e76342e436f6d70616e794203e04102122f0a0b7570646174655f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b22490a1444656c657465436f6d70616e795265717565737412310a046e616d651801200128094223e04102fa411d0a1b6a6f62732e676f6f676c65617069732e636f6d2f436f6d70616e79228c010a144c697374436f6d70616e6965735265717565737412320a06706172656e741801200128094222e04102fa411c0a1a6a6f62732e676f6f676c65617069732e636f6d2f54656e616e7412120a0a706167655f746f6b656e18022001280912110a09706167655f73697a6518032001280512190a11726571756972655f6f70656e5f6a6f627318042001280822a0010a154c697374436f6d70616e696573526573706f6e736512320a09636f6d70616e69657318012003280b321f2e676f6f676c652e636c6f75642e74616c656e742e76342e436f6d70616e7912170a0f6e6578745f706167655f746f6b656e180220012809123a0a086d6574616461746118032001280b32282e676f6f676c652e636c6f75642e74616c656e742e76342e526573706f6e73654d6574616461746132c3070a0e436f6d70616e795365727669636512ad010a0d437265617465436f6d70616e79122c2e676f6f676c652e636c6f75642e74616c656e742e76342e437265617465436f6d70616e79526571756573741a1f2e676f6f676c652e636c6f75642e74616c656e742e76342e436f6d70616e79224d82d3e4930236222b2f76342f7b706172656e743d70726f6a656374732f2a2f74656e616e74732f2a7d2f636f6d70616e6965733a07636f6d70616e79da410e706172656e742c636f6d70616e791294010a0a476574436f6d70616e7912292e676f6f676c652e636c6f75642e74616c656e742e76342e476574436f6d70616e79526571756573741a1f2e676f6f676c652e636c6f75642e74616c656e742e76342e436f6d70616e79223a82d3e493022d122b2f76342f7b6e616d653d70726f6a656374732f2a2f74656e616e74732f2a2f636f6d70616e6965732f2a7dda41046e616d6512ba010a0d557064617465436f6d70616e79122c2e676f6f676c652e636c6f75642e74616c656e742e76342e557064617465436f6d70616e79526571756573741a1f2e676f6f676c652e636c6f75642e74616c656e742e76342e436f6d70616e79225a82d3e493023e32332f76342f7b636f6d70616e792e6e616d653d70726f6a656374732f2a2f74656e616e74732f2a2f636f6d70616e6965732f2a7d3a07636f6d70616e79da4113636f6d70616e792c7570646174655f6d61736b1291010a0d44656c657465436f6d70616e79122c2e676f6f676c652e636c6f75642e74616c656e742e76342e44656c657465436f6d70616e79526571756573741a162e676f6f676c652e70726f746f6275662e456d707479223a82d3e493022d2a2b2f76342f7b6e616d653d70726f6a656374732f2a2f74656e616e74732f2a2f636f6d70616e6965732f2a7dda41046e616d6512aa010a0d4c697374436f6d70616e696573122c2e676f6f676c652e636c6f75642e74616c656e742e76342e4c697374436f6d70616e696573526571756573741a2d2e676f6f676c652e636c6f75642e74616c656e742e76342e4c697374436f6d70616e696573526573706f6e7365223c82d3e493022d122b2f76342f7b706172656e743d70726f6a656374732f2a2f74656e616e74732f2a7d2f636f6d70616e696573da4106706172656e741a6cca41136a6f62732e676f6f676c65617069732e636f6dd2415368747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f636c6f75642d706c6174666f726d2c68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f6a6f627342770a1a636f6d2e676f6f676c652e636c6f75642e74616c656e742e76344213436f6d70616e795365727669636550726f746f50015a3c676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f74616c656e742f76343b74616c656e74a20203435453620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
