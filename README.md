# Dedex

Dedex is a DDEX XML file parser. DDEX is a standard used in the music industry to deliver rich media content. See more info at [ddex.net](https://ddex.net/). This covers only the ERN (Electronic Release Notification) standard, for versions 3.8.2 and 4.1.

In my past experiences as a developer, I always had to develop or enhanced a DDEX parser for ERN. I created one here that is as convenient to use as I always hoped for.

The **Rule** mechanism is pretty useful and flexible. The DDEX ERN standard is extremely vast and there are many ways to use it. Most providers generate a simplified yet comprehensive XML file covering most of the needs. The Rules helps checking during the parsing that not only the XML is valid, but contain the minimal consistent information.

It is possible to implement your own rules (contribute to this repository if you think other developers could make a use of it), and to implement a different set of rules for different provider.

For instance, it is possible to enforce that for a given XML the ISRC is provided for all recordings, but not for another one. Providers rules can be modelled in a **Rules Set**.

If you find this useful, please star this repository, and contribute.

This repository provides **Simple Entities** that can be handy to parse your first XML files. They give a simplified model of an Album, with Tracks, Artists and Deals attached. You can ignored the Simple Entities and build your own set or superset of entities to serve your needs. Note that the Simple Entities give a limited usage of DDEX. Read the documentation carefully before using it.

## Usage

### Convert a DDEX file to a SimpleAlbum

```php
use DedexBundle\Controller\ErnParserController;
use DedexBundle\Simplifiers\SimpleAlbum;

$xml_path = "tests/samples/with_assets/004_complete/1199119911991.xml";
$parser = new ErnParserController();
$ern = $parser->parse($xml_path);
$album = new SimpleAlbum($ern);

// Then you can access high level property of this album
$release_date = $album->getOriginalReleaseDate();
$artists_at_album_level = $album->getArtists();
$tracks_for_cd_1 = $album->getTracks()[1];
```

### Parse a file without XSD validation

```php
use DedexBundle\Controller\ErnParserController;

$xml_path = "tests/samples/001_audioalbum_complete.xml";
$parser = new ErnParserController();
$ern = $parser->parse($xml_path);

// Then you can access properties of the ERN
$created_at = $ern->getMessageHeader()->getMessageCreatedDateTime();
```

### Parse a file with XSD validation

XSD validation will load all XML and XSD in memory, making this library less efficient. Use with care. Is not adapted to gigantic files.

```php
use DedexBundle\Controller\ErnParserController;

$xml_path = "tests/samples/001_audioalbum_complete.xml";
$parser = new ErnParserController();
$parser->setXsdValidation(true);
$ern = $parser->parse($xml_path);
```

### Parse a file with Rules

```php
use DedexBundle\Controller\ErnParserController;
use DedexBundle\Rule\AtLeastOneImage;
use DedexBundle\Exception\RuleValidationException;

$xml_path = "tests/samples/001_audioalbum_complete.xml";
$parser = new ErnParserController();
$parser->addRule(new AtLeastOneImage(Rule::LEVEL_ERROR));
// ... can add multiple rules one by one
// ... or multiple rules with $parser->addRuleSet([])
$ern = $parser->parse($xml_path);  // will raise an RuleValidationException if rule is broken
```

## Parser config

Here are handy function from the parser.

`$parser=new ErnParserController();`

```php
$parser->setDisplayLog(true);
```

Displays parsing logs. For debugging purpose mainly. (default: `false`)

```php
$parser->setXsdValidation(true);
``` 

Validates XML against XSD. (default: `false` because will load XSD and XML in memory)

```php
$parser->getRuleMessages();
```

Returns a formatted string (with new lines) of all the errors generated by the rule checking. To be called when parsing ended. 
If one of the `ERROR` rules fail, the parser will throw an exception with these messages. 
In the case of only `WARNING` raised during the parsing, this function is the only way to read them. 

```php
$parser->addRuleSet();
```

Will store a set of Rule (array). For example, each provider could be check with a specific rule set.