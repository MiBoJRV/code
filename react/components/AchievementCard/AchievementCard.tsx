import React from 'react';
import cn from 'classnames';
import { Heading4, Text2 } from 'src/ui-kit';
import { AchievementType } from 'src/types';

export const AchievementCard: React.FC<AchievementType> = ({
  id,
  title,
  text,
  icon,
  className,
}): JSX.Element => (
  <div
    key={id}
    className="flex flex-col justify-between h-full absolute top-0 px-8 py-6 xs:px-5 xs:py-4 lg:px-[34px] lg:py-[29px]"
  >
    <div>
      <Heading4
        fontSize="text-title-box"
        fontSizeLg="lg:text-h4"
        className="brake-space leading-11 xs:pr-10 xs:text-x1 xs:leading-7"
      >
        {title}
      </Heading4>
    </div>
    <div
      className={cn(
        'mt-5 mb-5 w-14 h-14 xs:my-3 xs:w-7 xs:h-7 lg:mt-5 lg:mb-5  ',
        className
      )}
    >
      {icon}
    </div>
    <div className="flex justify-between items-end mt-0 lg:mt-auto">
      <Text2
        className="text-x2 leading-7 xs:text-text-box-sx xs:leading-5 lg:text-x2"
        title={text}
      />
    </div>
  </div>
);
