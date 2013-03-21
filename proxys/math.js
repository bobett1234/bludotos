/**
 * Copyright Franson Technology AB, Sweden, 2009
 * http://gpsgate.com, http://franson.com
 *
 * author Fredrik Blomqvist
 *
 * Math functions
 * @module Math
 *
 */

var Franson = Franson || {};
Franson.Math = Franson.Math || {};

/**
 * namespace
 * @class Franson.Math
 * @static
 */
//MochiKit.Base.update(Franson.Math = (function()
Franson.Math = (function()
{
	/**
	 * todo: rename isValidNumber?
	 * todo: support multiple parameters to match Mochi-conventions?
	 * @method isNumber
	 * @param {Object} v
	 * @return {boolean}
	 */
	function isNumber(v) // rename isValidNumber?
	{
		return typeof(v) == 'number' && v !== null && isFinite(v); // or use isNaN?
	}

	/**
	 * converts radians to degrees
	 * @method radToDeg
	 * @param {number} rad radians
	 * @return {float} decimal degrees
	 */
	function radToDeg(rad)
	{
		return rad * 180 / Math.PI;
	}

	/**
	 * converts degress to radians
	 * @method degToRad
	 * @param {number} deg degrees
	 * @return {float} radians
	 */
	function degToRad(deg)
	{
		return deg * Math.PI / 180;
	}

	/**
	 * forces value to be within min- and maxValue. i.e: minValue <= value <= maxValue
	 * todo: take an optional cmp-func also? (or use MochiKit.Base.objMax/Min (MochiKit.Base.compare))
	 * @method clamp
	 * @param {number} value
	 * @param {number} minValue  (hmm, default to 0?)
	 * @param {number} maxValue  (hmm, default to MAXVALUE?)
	 * @return {number}
	 */
	function clamp(value, minValue, maxValue)
	{
		return Math.min(Math.max(minValue, value), maxValue);
	}

	/**
	 * Rounds a number to a specific number of decimal places
	 * see also <a href="http://mochikit.com/doc/html/MochiKit/Format.html#fn-roundtofixed">MochiKit.Format.roundToFixed()</a> and <a href="#method_roundToMaxFixed">Franson.Util.roundToMaxFixed()</a>
	 * @method roundToNDecimals
	 * @param {float} value
	 * @param {integer} [numDecimals=3]
	 * @return {float}
	 */
	function roundToNDecimals(value, numDecimals)
	{
		if (typeof(numDecimals) == 'undefined')
			numDecimals = 3;

		var scale = Math.pow(10, numDecimals);

		return Math.round(value * scale) / scale;
	}


	/**
	 * PC: rangeStart <= rangeEnd
	 * uses half-open range. i.e random(0, 10) => values within [0..9] (i.e [0,10) in range-notation)
	 * @method random
	 * @param {integer} [rangeStart=0]
	 * @param {integer} [rangeEnd=rangeEnd] if not set method returns [0..rangeStart-1]
	 * @return {integer} number in range [rangeStart..rangeEnd-1]
	 */
	function random(rangeStart, rangeEnd)
	{
		// handle single param overload
		if (typeof(rangeEnd) == 'undefined')
		{
			rangeEnd = rangeStart;
			rangeStart = 0;
		}

		var range = rangeEnd - rangeStart;

		return Math.floor(Math.random() * range) + rangeStart;
	}


	/**
	 * example: <code>var xlog10 = Franson.Math.logN(x, 10);</code>
	 * @method logN
	 * @param {number} val
	 * @param {number} [base=10]
	 * @return {number} val to the base-logarithm
	 */
	function logN(val, base) // or swap param order?  (logb, logB?)
	{
		base = base || 10;
		return Math.log(val) / Math.log(base);
	}


	// public API
	return {
		isNumber: isNumber,

		radToDeg: radToDeg,
		degToRad: degToRad,

		clamp: clamp,
		roundToNDecimals: roundToNDecimals,

		random: random,

		logN: logN
	};

})();