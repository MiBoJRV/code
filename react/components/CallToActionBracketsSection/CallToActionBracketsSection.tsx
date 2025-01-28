import React from 'react';
import { CallToActionType } from 'src/types';
import { Heading2, PageSection } from 'src/ui-kit';
import { BracketLeftIcon, BracketRightIcon } from 'src/assets/icons';
import cn from 'classnames';

export const CallToActionBracketsSection: React.FC<CallToActionType> = ({
  title,
  description,
  icon,
  button,
  className = '',
}): JSX.Element => {
  return (
    <PageSection>
      <div className=" max-w-[1118px] mx-auto flex items-center justify-center text-center relative">
        <div className="flex items-center max-w-[100%] mx-auto lg:pt-[26px]">
          <BracketLeftIcon className="absolute h-full max-w-12 max-h-[500px] min-h-[220px] -left-[8px] lg:h-[281px]" />
          <div className="relative px-5 min-h-[220px] flex flex-col justify-center">
            <Heading2 className="p-2">{title}</Heading2>
            {description}
          </div>
          <BracketRightIcon className="absolute h-full max-w-12 max-h-[500px] min-h-[220px] -right-[8px] lg:h-[281px]" />
        </div>
      </div>
      <div className={cn(`flex justify-center`, className)}>
        {icon && icon}
        {button && button}
      </div>
    </PageSection>
  );
};
