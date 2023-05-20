# serializer-test
MRE for breaking symfony/serializer

Steps:
1. Clone, cd into it, composer install
2. php bin/phpunit tests/SerializerTestCase.php
4. RED

It's definitely a problem with the discriminator. If you check out the 3rd commit (d57a3b5ffecf2597a26efd2bc5b49365b831b190), the enum values are normalized according to their case.

I had initially thought it was due to multiple enum's (which is why there are `B` classes), but it turns out the behavior is tied to an enum with multiple cases
