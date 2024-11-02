<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('html5'))
{
	function html5($tag, $attributes = array(), $contents = NULL)
	{
		$tag = strtolower($tag);

		if ($tag === 'doctype')
		{
			return '<!DOCTYPE html>';
		}

		$attribute = '';

		foreach ($attributes as $name => $value)
		{
			switch ($name)
			{
				case 'class':
					if (is_array($value))
					{
						$value = implode(' ', $value);
					}
					break;

				case 'style':
					if (is_array($value))
					{
						$style = $value;
						$value = '';

						foreach ($style as $css_property => $css_value)
						{
							$value .= "{$css_property}:{$css_value};";
						}
					}
					break;
				
				default:
					break;
			}

			$name = strtolower($name);
			if (is_bool($value) === FALSE)
			{
				$attribute .= " {$name}=\"{$value}\"";
			}
			else
			{
				$attribute .= " {$name}";
			}
		}

		if ( ! $contents)
		{
			return "<{$tag}{$attribute}>";
		}
		
		if (is_array($contents) === FALSE)
		{
			$content = $contents;
		}
		else
		{
			$content = implode('', $contents);
		}

		return "<{$tag}{$attribute}>{$content}</{$tag}>";
	}
}
