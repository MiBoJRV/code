import React from 'react';
import { TestimonialType } from 'src/types';
import { BracketLeftIcon, BracketRightIcon, QuoteIcon } from 'src/assets/icons';
import cn from 'classnames';

type TestimonialItemProps = {
  isSliderItem?: boolean;
  className?: string;
} & TestimonialType;

export const TestimonialItem: React.FC<TestimonialItemProps> = ({
  quote,
  companyIcon,
  client: { name, company, photo, countryFlag },
  isSliderItem = true,
  className = '',
}): JSX.Element => {
  const isCompanyIcon = !isSliderItem && companyIcon;
  return (
    <figure className={cn('lg:flex lg:flex-row', className)}>
      {isCompanyIcon && (
        <div className="hidden lg:block lg:mr-16 lg:pt-7">{companyIcon}</div>
      )}
      <div className="relative w-full h-[480px] !flex flex-col items-center justify-center lg:h-80">
        <BracketLeftIcon className="h-full absolute left-0" />
        <div className="flex flex-col items-center justify-center px-8">
          <div className="lg:flex justify-center">
            <div className="flex justify-between items-center mb-5 lg:mb-0 lg:mr-10">
              <QuoteIcon className="w-9 h-7 lg:w-12 lg:h-10 lg:self-start" />
              {isCompanyIcon && <div className="lg:hidden">{companyIcon}</div>}
            </div>
            <div className="lg:max-w-[80%]">
              <blockquote className="mb-8 font-medium text-h4-sm-mob text-grey xs:text-h4-mob xl:text-h4">
                {quote}
              </blockquote>
              <figcaption
                className={`w-full flex items-center justify-start ${
                  isSliderItem ? 'lg:justify-center' : 'lg:justify-start'
                } `}
              >
                <img
                  src={photo.src}
                  srcSet={photo.srcSet}
                  alt={`${name}'s photo`}
                  className="w-10 h-w-10 mr-2 xs:w-[60px] xs:h-[60px] xs:mr-6"
                />
                <div className="flex flex-col">
                  <cite className="mb-1 font-medium text-link-box-mob text-grey not-italic xs:text-link">
                    {name}
                  </cite>
                  <cite className="text-x4 text-grey not-italic xs:text-xs">
                    {company}
                  </cite>
                </div>
                <img
                  src={countryFlag.src}
                  srcSet={countryFlag.srcSet}
                  alt="Flag of France"
                  className="w-[22px] h-4 ml-1 mb-1 self-end xs:ml-5"
                />
              </figcaption>
            </div>
          </div>
        </div>
        <BracketRightIcon className="h-full absolute top-0 right-0" />
      </div>
    </figure>
  );
};
