<?php

namespace DedexBundle\Rule;

/*
 * The MIT License
 *
 * Copyright 2020 Mickaël Arcos <@miqwit>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

/**
 * There must be at least one release of type Album
 *
 * @author Mickaël Arcos <@miqwit>
 */
class AtLeastOneAlbumRelease extends Rule {
  protected $supported_versions = ["382", "41"];
  protected $message = "Must have at least one release of type Album";
  
  public function validates($newReleaseMessage): bool {
    foreach ($newReleaseMessage->getReleaseList()->getRelease() as $release) {
      foreach ($release->getReleaseType() as $type) {
        if ($type->value() === "Album") {
          return true;
        }
      }
    }
    
    return false;
  }
}