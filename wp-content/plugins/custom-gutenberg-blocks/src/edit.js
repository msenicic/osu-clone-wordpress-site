import { __ } from '@wordpress/i18n';
import { useBlockProps, RichText } from '@wordpress/block-editor';
import './editor.scss';

export default function Edit({attributes: {quote, person}, setAttributes}) {
	const onChangeQuote = (value) => {
		setAttributes({quote: value});
	}

	const onChangePerson = (value) => {
		setAttributes({person: value});
	}

	return (
		<section {...useBlockProps()} className="module module-quote-block">
			<div className="container">
				<div className="quote">
					<RichText
						tagName='p'
						onChange={onChangeQuote}
						value={quote}
						placeholder={__('Put your quote text here','custom-gutenberg-blocks')}
						className='quote-text'
					/>
					<RichText
						tagName='p'
						onChange={onChangePerson}
						value={person}
						placeholder={__('Person name and title here','custom-gutenberg-blocks')}
						className='person'
					/>
				</div>
			</div>
		</section>
	);
}
